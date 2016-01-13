<?php
namespace Kordy\Ticketit;

use Collective\Html\FormFacade as CollectiveForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kordy\Ticketit\Controllers\InstallController;
use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Controllers\ToolsController;
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
        //Todo use $installer->inactiveSettings to check and install new added settings
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
            CollectiveForm::macro('custom', function ($type, $name, $value = "#000000", $options = []) {
                $field = $this->input($type, $name, $value, $options);
                return $field;
            });

            // Passing to views the master view value from the setting file
            view()->composer('ticketit::*', function ($view) {
                $tools = new ToolsController();
                $master = Setting::grab('master_template');
                $email = Setting::grab('email.template');
                $view->with(compact('master', 'email', 'tools'));
            });

            // Send notification when new comment is added
            Comment::creating(function ($comment) {
                if (Setting::grab('comment_notification') && $comment->private != 1) {
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
            $this->publishes([__DIR__ . '/Public' => public_path('vendor/ticketit')], 'public');
            $this->publishes([__DIR__ . '/Migrations' => base_path('database/migrations')], 'db');

            // Check public assets are present, publish them if not
//            $installer->publicAssets();

            $main_route = Setting::grab('main_route');
            $admin_route = Setting::grab('admin_route');
            include __DIR__ . '/routes.php';
        }
        elseif (Request::path() == 'tickets-install' || Request::path() == 'tickets' || Request::path() == 'tickets-admin') {

            $this->loadTranslationsFrom(__DIR__ . '/Translations', 'ticketit');
            $this->loadViewsFrom(__DIR__ . '/Views', 'ticketit');
            $this->publishes([__DIR__ . '/Migrations' => base_path('database/migrations')], 'db');

            Route::get('/tickets-install', [
                'middleware' => 'auth',
                'as' => 'tickets.install.index',
                'uses' => 'Kordy\Ticketit\Controllers\InstallController@index'
            ]);
            Route::post('/tickets-install', [
                'middleware' => 'auth',
                'as' => 'tickets.install.setup',
                'uses' => 'Kordy\Ticketit\Controllers\InstallController@setup'
            ]);
            Route::get('/tickets', function() {
                return redirect()->route('tickets.install.index');
            });
            Route::get('/tickets-admin', function() {
                return redirect()->route('tickets.install.index');
            });
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
        $this->app->register('Yajra\Datatables\DatatablesServiceProvider');
        $this->app->register('Jenssegers\Date\DateServiceProvider');
        /*
         * Create aliases for the dependency.
         */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('CollectiveForm', 'Collective\Html\FormFacade');
	}
}
