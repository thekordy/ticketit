<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Ticket;

class NotificationsController extends Controller {

    public function newComment(Comment $comment)
    {
        $ticket = $comment->ticket;
        $notification_owner = $comment->user;
        $template = "ticketit::emails.comment_notification";
        $data = ['comment' => serialize($comment), 'ticket' => serialize($ticket)];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            'New comment from ' . $notification_owner->name . ' on ' . $ticket->subject);
    }

    public function ticketStatusUpdated(Ticket $ticket, Ticket $original_ticket)
    {
        $notification_owner = \Auth::user();
        $template = "ticketit::emails.status_notification";
        $data = [
            'ticket' => serialize($ticket),
            'notification_owner' => serialize($notification_owner),
            'original_ticket' => serialize($original_ticket)
        ];

        $this->sendNotification($template, $data, $ticket, $notification_owner,
            $notification_owner->name . ' updated ' . $ticket->subject.' status to '.$ticket->status->name);
    }

    /**
     * Send email notifications from the action owner to other involved users
     * @param string $template
     * @param array $data
     * @param object $ticket
     * @param object $notification_owner
     */
    public function sendNotification($template, $data, $ticket, $notification_owner, $subject)
    {
        if (config('ticketit.queue_emails') == 'yes') {
            Mail::queue($template, $data,
                function ($m) use ($ticket, $notification_owner, $subject) {

                    if ($ticket->user->email != $notification_owner->email)
                        $m->to($ticket->user->email, $ticket->user->name);

                    if ($ticket->agent->email != $notification_owner->email)
                        $m->to($ticket->agent->email, $ticket->agent->name);


                    $m->from($notification_owner->email, $notification_owner->name);

                    $m->subject($subject);
                });
        }
        else {
            Mail::send($template, $data,
                function ($m) use ($ticket, $notification_owner, $subject) {

                    if ($ticket->user->email != $notification_owner->email)
                        $m->to($ticket->user->email, $ticket->user->name);

                    if ($ticket->agent->email != $notification_owner->email)
                        $m->to($ticket->agent->email, $ticket->agent->name);


                    $m->from($notification_owner->email, $notification_owner->name);

                    $m->subject($subject);
                });
        }
    }

}