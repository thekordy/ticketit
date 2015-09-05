<?php
namespace Kordy\Ticketit;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;
use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Ticket;

class TicketitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Adding HTML5 color picker to form elements
        Form::macro('custom', function($type, $name, $value = "#000000", $options = [])
        {
            $field = $this->input($type, $name, $value, $options);
            return $field;
        });

        // Passing to views the master view value from the setting file
        view()->composer('ticketit::*', function ($view) {
            $master = config('ticketit.master_template');
            $view->with(compact('master'));
        });

        // Send notification when new comment is added
        Comment::creating(function ($comment) {
            if (config('ticketit.comment_notification') == 'yes') {
                $notification = new NotificationsController();
                $notification->newComment($comment);
            }

        });

        // Send notification when ticket status is modified
        Ticket::updating(function ($modified_ticket) {
            if (config('ticketit.status_notification') == 'yes') {
                $original_ticket = Ticket::find($modified_ticket->id);
                if ($original_ticket->status->id != $modified_ticket->status->id) {
                    $notification = new NotificationsController();
                    $notification->ticketStatusUpdated($modified_ticket, $original_ticket);
                }
            }
            if (config('ticketit.assigned_notification') == 'yes') {
                $original_ticket = Ticket::find($modified_ticket->id);
                if ($original_ticket->agent->id != $modified_ticket->agent->id) {
                    $notification = new NotificationsController();
                    $notification->ticketAgentUpdated($modified_ticket, $original_ticket);
                }
            }
            return true;
        });

        // Send notification when ticket status is modified
        Ticket::created(function ($ticket) {
            if (config('ticketit.assigned_notification') == 'yes') {
                $notification = new NotificationsController();
                $notification->newTicketNotifyAgent($ticket);
            }
            return true;
        });

        $this->loadViewsFrom(__DIR__.'/views', 'ticketit');
        
        $this->publishes([__DIR__.'/views' => base_path('resources/views/vendor/ticketit')], 'views');
        $this->publishes([__DIR__.'/config/ticketit.php' => config_path('ticketit.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}
