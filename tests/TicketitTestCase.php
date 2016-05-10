<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

abstract class TicketitTestCase extends Illuminate\Foundation\Testing\TestCase
{
    use DatabaseMigrations;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    protected $userClass;

    /**
     * @var Faker\Generator
     */
    protected $faker;

    /**
     * Creates the application.
     *
     * @throws Exception
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';

        $this->setEnv();

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        // Run test migrations in the testing environment on sqlite on memory
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');

        // Use a specific User model, so we can include traits when running tests
        $laravel_version = substr($app::VERSION, 0, 3);

        switch ($laravel_version) {
            case '5.1':
                $app['config']->set('auth.model', TestUserL51::class); //Laravel 5.1
                break;
            case '5.2':
                $app['config']->set('auth.providers.users.model', TestUserL52::class); //Laravel 5.2
                break;
            default:
                throw new Exception('This package supports only Laravel 5.1 and 5.2');
        }

        $app->register(Kordy\Ticketit\TicketitServiceProvider::class);

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        // Get the user model from the Config/models.php file
        // UNUSED!
        $this->userClass = config('ticketit.users.model');

        $this->faker = $faker = \Faker\Factory::create();
    }

    public function runDatabaseMigrations()
    {
        // Run fresh migrations before every test
        $this->artisan('migrate');

        $fileSystem = new \Illuminate\Filesystem\Filesystem();
        $classFinder = new \Illuminate\Filesystem\ClassFinder();

        foreach ($fileSystem->files(__DIR__.'/../src/Migrations') as $file) {
            $fileSystem->requireOnce($file);
            $migrationClass = $classFinder->findClass($file);

            (new $migrationClass())->up();
        }

        // no need of rolling back, since the database is in the memory, it's destroyed anyways
    }

    /**
     * Set environment values. These usually go to .env file.
     */
    protected function setEnv()
    {
        putenv('APP_KEY='.Illuminate\Support\Str::random(32));

        putenv('APP_ENV=testing');
        putenv('CACHE_DRIVER=array');
        putenv('SESSION_DRIVER=array');
        putenv('QUEUE_DRIVER=sync');
    }
}

$laravel_version = substr(Illuminate\Foundation\Application::VERSION, 0, 3);

/*
 * Copy of Laravel 5.2's default App\User
 */
if ($laravel_version == '5.2') {
    class TestUserL52 extends Illuminate\Foundation\Auth\User
    {
        use \Kordy\Ticketit\Traits\TicketitAdminTrait;
        use \Kordy\Ticketit\Traits\TicketitAgentTrait;
        use \Kordy\Ticketit\Traits\TicketitUserTrait;

        protected $table = 'users';
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
            'email',
            'password',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];
    }
}

/*
 * Copy of Laravel 5.1's default App\User
 * without CanResetPassword trait
 */
if ($laravel_version == '5.1') {
    class TestUserL51 extends Illuminate\Database\Eloquent\Model implements Illuminate\Contracts\Auth\Authenticatable, Illuminate\Contracts\Auth\Access\Authorizable
    {
        use Illuminate\Auth\Authenticatable, Illuminate\Foundation\Auth\Access\Authorizable;

        use \Kordy\Ticketit\Traits\TicketitAdminTrait;
        use \Kordy\Ticketit\Traits\TicketitAgentTrait;
        use \Kordy\Ticketit\Traits\TicketitUserTrait;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['name', 'email', 'password'];
        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = ['password', 'remember_token'];
    }
}
