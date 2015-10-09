<?php
namespace Kordy\Ticketit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;
use Kordy\Ticketit\Controllers\NotificationsController;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Seeds\SettingsTableSeeder;

class TicketitServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {

        // Package Migrations
        $tables = [
            '2015_07_22_115516_create_ticketit_tables',
            '2015_07_22_123254_alter_users_table',
            '2015_09_05_204742_create_jobs_table',
            '2015_09_29_123456_add_completed_at_column_to_ticketit_table',
            '2015_10_08_123457_create_settings_table'
        ];

        // Application active migrations
        $migrations = DB::select('select * from migrations');

        $mig_counter = 0;
        foreach ($migrations as $migration_arr) { // Count active package migrations
            if (in_array($migration_arr->migration, $tables)) {
                $mig_counter += 1;
            }
        }
        if (count($tables) != $mig_counter) { // If a migration is missing, do the migrate
            Artisan::call('migrate', array('--path' => 'vendor/kordy/ticketit/src/Migrations'));
        }
        // If ticketit_settings empty, run the seeder
        $settings_table = DB::select('select * from ticketit_settings');
        if (empty($settings_table)) {
            $cli_path = 'config/ticketit.php'; // if seeder run from cli, use the cli path
            $provider_path = '../config/ticketit.php'; // if seeder run from provider, use the provider path
            $config_settings = [];
            $settings_file_path = false;
            if (File::isFile($cli_path)) {
                $settings_file_path = $cli_path;
            } elseif (File::isFile($provider_path)) {
                $settings_file_path = $provider_path;
            }
            if ($settings_file_path) {
                $config_settings = include $settings_file_path;
                File::move($settings_file_path, $settings_file_path.'.backup');
            }
            $seeder = new SettingsTableSeeder();
            $seeder->config = $config_settings;
            $seeder->run();
        }

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
        $loader->alias('Html', 'Collective\Html\FormFacade');
        $loader->alias('Datatables', 'yajra\Datatables\Datatables');
	}
}
