<?php

namespace Kordy\Ticketit\Test;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;

class TicketitTestCase extends TestCase
{

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    protected $user_model;
    
    protected $laravel_version;

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../../../../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        // Run test migrations in the testing environment on sqlite on memory
        $this->app['config']->set('database.default','sqlite');
        $this->app['config']->set('database.connections.sqlite.database', ':memory:');
        // run the migrations at testing setUp
        $this->artisan('migrate');
        $this->artisan('migrate', ['--path' => 'vendor/kordy/ticketit/src/Migrations']);

        // Set the baseUrl to the APP_URL configured in .env
        $this->baseUrl = $this->app->environment('APP_URL');

        // Get the user model from the Config/auth.php file
        $this->user_model = config('auth.model') ?: config('auth.providers.users.model');
    }

    public function tearDown()
    {
        // rollback migrations at testing finish
        $this->artisan('migrate:rollback');
    }
}
