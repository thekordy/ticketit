<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Kordy\Ticketit\Models\Attachment;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;
use PhpImap\Mailbox as ImapMailbox;

class EmailsController extends Controller
{
    public function getEmails()
    {
        $imap_server = Setting::grab('imap_server');
        $imap_folder = Setting::grab('imap_folder');
        $imap_path = '{'.$imap_server.'}'.$imap_folder;
        $imap_user = Setting::grab('imap_user');
        $imap_pass = Setting::grab('imap_password');
        $attachment_path = storage_path().'/app/attachments/';
        $mailbox = new ImapMailbox($imap_path, $imap_user, $imap_pass, $attachment_path);

        // Uncomment and set 'imap_folder' setting to ''. This will allow you to check available folders in connection
        //$check_folders = $mailbox->getListingFolders();
        //return (var_dump($check_folders));

        $mailIds = $mailbox->searchMailBox('ALL');
        if ($mailIds) {
            $this->cleanEmails($mailIds, $mailbox);
        // Useful for debugging
        //} else {
        //    die('Mailbox is empty');
        }
        if (Setting::grab('move_email_to')) {
            foreach ($mailIds as $mailId) {
                $mailbox->moveMail($mailId, Setting::grab('move_email_to'));
            }
        }

        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index');
    }

    public function cleanEmails($mailIds, $mailbox)
    {
        foreach ($mailIds as $mailId) {
            $email = $mailbox->getMail($mailId);

            $user = User::Where('email', '=', $email->fromAddress)->get();

            if ($email->textPlain) {
                $clean_text = $email->textPlain;
            } else {
                $clean_text = $email->textHtml;
            }

            // Remove quoted lines (lines that begin with '>').
            $clean_text = preg_replace("/(^\w.+:\n)?(^>.*(\n|$))+/mi", '', $clean_text);
            // Remove lines beginning with 'On' and ending with 'wrote:' (matches
            // Mac OS X Mail, Gmail).
            $clean_text = preg_replace('/^(On).*(wrote:).*$/sm', '', $clean_text);
            // Remove lines like '----- Original Message -----' (some other clients).
            // Also remove lines like '--- On ... wrote:' (some other clients).
            $clean_text = preg_replace('/^---.*$/mi', '', $clean_text);
            // Remove lines like '____________' (some other clients).
            $clean_text = preg_replace('/^____________.*$/mi', '', $clean_text);
            // Remove blocks of text with formats like:
            //   - 'From: Sent: To: Subject:'
            //   - 'From: To: Sent: Subject:'
            //   - 'From: Date: To: Reply-to: Subject:'
            $clean_text = preg_replace('/From:.*^(To:).*^(Subject:).*/sm', '', $clean_text);
            // Remove any remaining whitespace.
            $clean_text = trim($clean_text);

            if (count($user) == '1') {
                $this->storeEmails($email, $user, $clean_text);
            }
            // In the furture an action for unknown emails could be here
        }
    }

    public function storeEmails($email, $user, $clean_text)
    {
        // Determine if ticket subject is likely opened or new
//        $comment_email = '*New comment from * on ticket *';
        preg_match('/\[\#(\d*)\]/', $email->subject, $subject_ticket_id);

        if (isset($subject_ticket_id[1])) {
            $ticket_id = $subject_ticket_id[1];
            $comment = new Comment();
            $comment->setPurifiedContent($clean_text);
            $comment->ticket_id = $ticket_id;
            $comment->user_id = $user[0]->id;
            $comment->save();

            $ticket = Ticket::find($comment->ticket_id);
            $ticket->updated_at = $comment->created_at;
            $ticket->save();

            if ($email->getAttachments()) {
                $this->getAttachments($email, $comment);
            }
        } else {
            $ticket = new Ticket();

            $ticket->subject = $email->subject;
            $ticket->content = $clean_text;
            $ticket->priority_id = Setting::grab('default_priority_id');
            $ticket->category_id = Setting::grab('default_category_id');

            $ticket->status_id = Setting::grab('default_status_id');
            $ticket->user_id = $user[0]->id;
            if (Setting::grab('default_emails_agent') == 'auto') {
                $ticket->autoSelectAgent();
            } else {
                $ticket->agent_id = Setting::grab('default_emails_agent');
            }

            $ticket->save();

            // Notify sender user
            $notification = new NotificationsController();
            $notification->newTicketNotifySender($ticket);
        }
    }

    public function getAttachments($email, $comment)
    {
        foreach ($email->getAttachments() as $file) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $filename = $file->id.$file->name;
            $original_filename = $file->name;
            $temp_path = $file->filePath;

            $validate = preg_match("/.*\.(".Setting::grab('accepted_email_attachments').')$/i', $temp_path);

            if (!$validate) {
                unlink($temp_path);

                return var_dump($validate);
            } else {
                $filepath = '/app/attachments/'.$comment->user_id.'/';
                $savepath = storage_path().'/app/attachments/'.$comment->user_id.'/'.$filename;
                rename($temp_path, $savepath);

                $file_entry = new Attachment();
                $file_entry->mime = finfo_file($finfo, $savepath);
                $file_entry->original_filename = $original_filename;
                $file_entry->filename = $filename;
                $file_entry->filepath = $filepath;
                $file_entry->ticket_id = $comment->ticket_id;
                $file_entry->comment_id = $comment->id;
                $file_entry->save();

                return var_dump($validate);
            }
        }
    }
}
