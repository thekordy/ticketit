<?php
namespace Kordy\Ticketit;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kordy\Ticketit\Controllers\InstallController;
use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;

class TicketitServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
        $installer = new InstallController();

        // if a migration is missing scape to the installation
        if (empty($installer->inactiveMigrations()) && DB::table('ticketit_settings')->count() != 0) {
            // Send the Agent User model to the view under $u
            view()->composer('*', function ($view) {
                if (auth()->check()) {
                    $u = Agent::find(auth()->user()->id);
                    $view->with('u', $u);
                }
                $setting = new Setting;
                $view->with('setting', $setting);
            });

            // Adding HTML5 color picker to form elements
            Form::macro('custom', function ($type, $name, $value = "#000000", $options = []) {
                $field = $this->input($type, $name, $value, $options);
                return $field;
            });

            // Passing to views the master view value from the setting file
            view()->composer('ticketit::*', function ($view) {
                $master = Setting::grab('master_template');
                $email = Setting::grab('email.template');
                $view->with(compact('master', 'email'));
            });

            // Send notification when new comment is added
            Comment::creating(function ($comment) {
                if (Setting::grab('comment_notification')) {
                    $notification = new NotificationsController();
                    $notification->newComment($comment);
                }

            });

            // Send notification when ticket status is modified
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

            // Send notification when ticket status is modified
            Ticket::created(function ($ticket) {
                if (Setting::grab('assigned_notification')) {
                    $notification = new NotificationsController();
                    $notification->newTicketNotifyAgent($ticket);
                }
                return true;
            });

            $this->loadTranslationsFrom(__DIR__ . '/Translations', 'ticketit');

            $this->loadViewsFrom(__DIR__ . '/Views', 'ticketit');

            $this->publishes([__DIR__ . '/Views' => base_path('resources/views/vendor/ticketit')], 'views');
            $this->publishes([__DIR__ . '/Translations' => base_path('resources/lang/vendor/ticketit')], 'lang');

            $main_route = Setting::grab('main_route');
            $admin_route = Setting::grab('admin_route');
            include __DIR__ . '/routes.php';
        }
        elseif (Request::path() == 'tickets-install') {

            $this->loadTranslationsFrom(__DIR__ . '/Translations', 'ticketit');
            $this->loadViewsFrom(__DIR__ . '/Views', 'ticketit');
            $this->publishes([__DIR__ . '/Migrations' => base_path('database/migrations')], 'db');

            Route::get('/tickets-install', [
                'middleware' => 'auth',
                'uses' => 'Kordy\Ticketit\Controllers\InstallController@index'
            ]);
            Route::post('/tickets-install', [
                'middleware' => 'auth',
                'uses' => 'Kordy\Ticketit\Controllers\InstallController@setup'
            ]);
        }

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
        /*
         * Register the service provider for the dependency.
         */
        $this->app->register('Collective\Html\HtmlServiceProvider');
        $this->app->register('yajra\Datatables\DatatablesServiceProvider');
        /*
         * Create aliases for the dependency.
         */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Form', 'Collective\Html\FormFacade');
        $loader->alias('Html', 'Collective\Html\HtmlFacade');
        $loader->alias('Datatables', 'yajra\Datatables\Datatables');
	}
}
