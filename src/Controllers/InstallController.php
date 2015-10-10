<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Seeds\SettingsTableSeeder;

class InstallController extends Controller
{
    protected $migrations_tables = [
        '2015_07_22_115516_create_ticketit_tables',
        '2015_07_22_123254_alter_users_table',
        '2015_09_29_123456_add_completed_at_column_to_ticketit_table',
        '2015_10_08_123457_create_settings_table'
    ];

    /*
     * Initial install form
     */
    public function index() {

        $views_files_list = $this->viewsFilesList() + ['another' => trans('ticketit::install.another-file')];
        $inactive_migrations = $this->inactiveMigrations();
        return view('ticketit::install.index', compact('views_files_list', 'inactive_migrations'));
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
    public function viewsFilesList()
    {
        $templates_list = File::files('../resources/views/');
        foreach ($templates_list as $file_path) {
            $path = basename($file_path);
            $name = strstr(basename($file_path), '.', true);
            $files[$name] = $path;
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
}
