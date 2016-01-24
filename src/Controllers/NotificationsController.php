<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;

class NotificationsController extends Controller
{
    public function newComment(Comment $comment)
    {
        $ticket = $comment->ticket;
        $notification_owner = $comment->user;
        $template = 'ticketit::emails.comment';
        $data = ['comment' => serialize($comment), 'ticket' => serialize($ticket)];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            trans('ticketit::lang.notify-new-comment-from').$notification_owner->name.trans('ticketit::lang.notify-on').'[#'.$ticket->id.']', 'comment');
    }

    public function ticketStatusUpdated(Ticket $ticket, Ticket $original_ticket)
    {
        $notification_owner = auth()->user();
        $template = 'ticketit::emails.status';
        $data = [
            'ticket'             => serialize($ticket),
            'notification_owner' => serialize($notification_owner),
            'original_ticket'    => serialize($original_ticket),
        ];

        if (strtotime($ticket->completed_at)) {
            $this->sendNotification($template, $data, $ticket, $notification_owner,
                $notification_owner->name.trans('ticketit::lang.notify-updated').'[#'.$ticket->id.']'.trans('ticketit::lang.notify-status-to-complete'), 'status');
        } else {
            $this->sendNotification($template, $data, $ticket, $notification_owner,
                $notification_owner->name.trans('ticketit::lang.notify-updated').'[#'.$ticket->id.']'.trans('ticketit::lang.notify-status-to').$ticket->status->name, 'status');
        }
    }

    public function ticketAgentUpdated(Ticket $ticket, Ticket $original_ticket)
    {
        $notification_owner = auth()->user();
        $template = 'ticketit::emails.transfer';
        $data = [
            'ticket'             => serialize($ticket),
            'notification_owner' => serialize($notification_owner),
            'original_ticket'    => serialize($original_ticket),
        ];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            $notification_owner->name.trans('ticketit::lang.notify-transferred').'[#'.$ticket->id.']'.trans('ticketit::lang.notify-to-you'), 'agent');
    }

    public function newTicketNotifyAgent(Ticket $ticket)
    {
        $notification_owner = auth()->user();
        $template = 'ticketit::emails.owner';
        $data = [
            'ticket'             => serialize($ticket),
            'notification_owner' => serialize($notification_owner),
        ];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            $notification_owner->name.trans('ticketit::lang.notify-created-ticket').'[#'.$ticket->id.']', 'agent');
    }

    public function newTicketNotifySender(Ticket $ticket)
    {
        $notification_owner = auth()->user();
        $template = 'ticketit::emails.owner';
        $data = [
            'ticket'             => serialize($ticket),
            'notification_owner' => serialize($notification_owner),
        ];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            trans('ticketit::lang.notify-created-ticket-by-email').'[#'.$ticket->id.']', 'email');
    }

    /**
     * Send email notifications from the action owner to other involved users.
     *
     * @param string $template
     * @param array  $data
     * @param object $ticket
     * @param object $notification_owner
     */
    public function sendNotification($template, $data, $ticket, $notification_owner, $subject, $type)
    {
        $mail_callback = function ($m) use ($ticket, $notification_owner, $subject, $type) {

            if ($type != 'agent') {
                $m->to($ticket->user->email, $ticket->user->name);

                if ($ticket->user->email != $notification_owner->email) {
                    $m->to($ticket->user->email, $ticket->user->name);
                }

                if ($ticket->agent->email != $notification_owner->email) {
                    $m->to($ticket->agent->email, $ticket->agent->name);
                }
            } elseif ($type == 'email') {
                $m->to($ticket->user->email, $ticket->user->name);
            } else {
                $m->to($ticket->agent->email, $ticket->agent->name);
            }

            $m->from((Setting::grab('default_outgoing_email') == 'user' ? $notification_owner->email : Setting::grab('default_outgoing_email')),
                (Setting::grab('default_outgoing_name') == 'user' ? $notification_owner->name : Setting::grab('default_outgoing_name')));

            $m->subject($subject);
        };

        if (Setting::grab('queue_emails') == 'yes') {
            Mail::queue($template, $data, $mail_callback);
        } else {
            Mail::send($template, $data, $mail_callback);
        }
    }
}
