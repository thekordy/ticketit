<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Seeds\SettingsTableSeeder;
use Kordy\Ticketit\Seeds\TicketitTableSeeder;

class InstallController extends Controller
{
    public $migrations_tables = [];

    public function __construct()
    {
        $migrations = \File::files(dirname(dirname(__FILE__)).'/Migrations');
        foreach($migrations as $migration) {
            $this->migrations_tables[] = basename($migration, ".php");
        }
    }

    public function publicAssets() {
        $public = $this->allFilesList(public_path('vendor/ticketit'));
        $assets = $this->allFilesList(base_path('vendor/kordy/ticketit/src/Public'));
        if( $public !== $assets ) {
            Artisan::call('vendor:publish', [
                '--provider' => 'Kordy\\Ticketit\\TicketitServiceProvider',
                '--tag' => ['public']
            ]);
        }
    }

    /*
     * Initial install form
     */
    public function index() {

        $views_files_list = $this->viewsFilesList('../resources/views/') + ['another' => trans('ticketit::install.another-file')];
        $inactive_migrations = $this->inactiveMigrations();
        $users_list = User::lists('name', 'id')->toArray();
        return view('ticketit::install.index', compact('views_files_list', 'inactive_migrations', 'users_list'));
    }

    /*
     * Do all pre-requested setup
     */
    public function setup(Request $request) {

        $master = $request->master;
        if ($master == 'another') {
            $another_file = $request->other_path;
            $views_content = strstr(substr(strstr($another_file, 'views/'), 6), '.blade.php', true);
            $master = str_replace('/', '.', $views_content);
        }
        $this->initialSettings($master);
        $admin_id = $request->admin_id;
        $admin = User::find($admin_id);
        $admin->ticketit_admin = true;
        $admin->save();
        return redirect('/'.Setting::grab('main_route'));
    }

    /*
     * Initial installer to install migrations, seed default settings, and configure the master_template
     */
    public function initialSettings($master) {
        if ($this->inactiveMigrations()) { // If a migration is missing, do the migrate
            Artisan::call('vendor:publish', [
                '--provider' => 'Kordy\\Ticketit\\TicketitServiceProvider',
                '--tag' => ['db']
            ]);
            Artisan::call('migrate');

            $this->settingsSeeder($master);
        }
        elseif(DB::table('ticketit_settings')->count() == 0) { // Settings table is empty, run the seeder

            $this->settingsSeeder($master);
        }
    }

    /**
     * Run the settings table seeder
     * @param string $master
     */
    public function settingsSeeder($master = 'master')
    {
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
            File::move($settings_file_path, $settings_file_path . '.backup');
        }
        $seeder = new SettingsTableSeeder();
        $config_settings['master_template'] = $master;
        $seeder->config = $config_settings;
        $seeder->run();
    }

    /**
     * Get list of all files in the views folder
     * @return mixed
     */
    public function viewsFilesList($dir_path)
    {
        $dir_files = File::files($dir_path);
        $files = [];
        foreach ($dir_files as $file) {
            $path = basename($file);
            $name = strstr(basename($file), '.', true);
            $files[$name] = $path;
        }
        return $files;
    }

    /**
     * Get list of all files in the views folder
     * @return mixed
     */
    public function allFilesList($dir_path)
    {

        $files = [];
        if (File::exists($dir_path)) {
            $dir_files = File::allFiles($dir_path);
            foreach ($dir_files as $file) {
                $path = basename($file);
                $name = strstr(basename($file), '.', true);
                $files[$name] = $path;
            }
        }

        return $files;
    }

    /**
     * Get all Ticketit Package migrations that were not migrated
     * @return array
     */
    public function inactiveMigrations()
    {
        $inactiveMigrations = [];

        // Package Migrations
        $tables = $this->migrations_tables;

        // Application active migrations
        $migrations = DB::select('select * from migrations');

        foreach ($migrations as $migration_parent) { // Count active package migrations
            $migration_arr [] = $migration_parent->migration;
        }

        foreach ($tables as $table) {
            if (!in_array($table, $migration_arr)) {
                $inactiveMigrations [] = $table;
            }
        }
        return $inactiveMigrations;
    }

    /**
     * Check if all Ticketit Package settings that were not installed to setting table
     * @return boolean
     */
    public function inactiveSettings()
    {
        $seeder = new SettingsTableSeeder();

        // Package Settings
        $installedSettings = DB::table('ticketit_settings')->get();

        // Application active migrations
        $defaultSettings = $seeder->getDefaults();

        if (count($installedSettings) == count($defaultSettings))
            return false;

        return true;
    }

    /**
     * Generate demo users, agents, and tickets
     * @return \Illuminate\Http\RedirectResponse
     */
    public function demoDataSeeder() {
        $seeder = new TicketitTableSeeder();
        $seeder->run();
        session()->flash('status', 'Demo tickets, users, and agents are seeded!');
        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index');
    }
}
