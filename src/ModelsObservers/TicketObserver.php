<?php

namespace Kordy\Ticketit\ModelsObservers;

use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;

class TicketObserver
{
    public function created()
    {
        // Send notification when ticket status is modified
        Ticket::created(function ($ticket) {
            if (Setting::grab('assigned_notification')) {
                $notification = new NotificationsController();
                $notification->newTicketNotifyAgent($ticket);
            }

            return true;
        });
    }

    public function updating()
    {
        Ticket::updating(function ($modified_ticket) {
            if (Setting::grab('status_notification')) {
                $original_ticket = Ticket::find($modified_ticket->id);
                if ($original_ticket->status_id != $modified_ticket->status_id || $original_ticket->completed_at != $modified_ticket->completed_at) {
                    $notification = new NotificationsController();
                    $notification->ticketStatusUpdated($modified_ticket, $original_ticket);
                }
            }
            if (Setting::grab('assigned_notification')) {
                $original_ticket = Ticket::find($modified_ticket->id);
                if ($original_ticket->agent->id != $modified_ticket->agent->id) {
                    $notification = new NotificationsController();
                    $notification->ticketAgentUpdated($modified_ticket, $original_ticket);
                }
            }

            return true;
        });
    }
}