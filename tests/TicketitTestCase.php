<?php

namespace Kordy\Ticketit\Tests;

use Exception;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\ClassFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Auth\Access\Authorizable as AuthorizableTrait;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Support\Str;
use Kordy\Ticketit\TicketitServiceProvider;
use Kordy\Ticketit\Traits\TicketitAdminTrait;
use Kordy\Ticketit\Traits\TicketitAgentTrait;
use Kordy\Ticketit\Traits\TicketitUserTrait;

abstract class TicketitTestCase extends TestCase
{
    use DatabaseMigrations;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * @var Generator
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
        // $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';
        $app = require __DIR__.'/../../../../bootstrap/app.php';

        $this->setEnv();

        $app->make(Kernel::class)->bootstrap();

        // Run test migrations in the testing environment on sqlite on memory
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');

        $app['config']->set('auth.model', TestUserL51::class); //Laravel 5.1
        // $app['config']->set('auth.providers.users.model', TestUserL52::class); //Laravel 5.2

        $app->register(TicketitServiceProvider::class);

        return $app;
    }

    public function setUp()
    {
        parent::setUp();

        // Run fresh migrations before every test
        $this->artisan('migrate');

        $fileSystem = new Filesystem();
        $classFinder = new ClassFinder();

        foreach ($fileSystem->files(__DIR__.'/../src/Migrations') as $file) {
            $fileSystem->requireOnce($file);
            $migrationClass = $classFinder->findClass($file);

            (new $migrationClass())->up();
        }

        $this->faker = $faker = Factory::create();
    }

    /**
     * Set environment values. These usually go to .env file.
     */
    protected function setEnv()
    {
        putenv('APP_KEY='.Str::random(32));

        putenv('APP_ENV=testing');
        putenv('CACHE_DRIVER=array');
        putenv('SESSION_DRIVER=array');
        putenv('QUEUE_DRIVER=sync');
    }
}

class TestUserL51 extends Model implements Authenticatable, Authorizable
{
    use AuthenticatableTrait, AuthorizableTrait;

    use TicketitAdminTrait;
    use TicketitAgentTrait;
    use TicketitUserTrait;

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

//class TestUserL52 extends User
//{
//    use TicketitAdminTrait;
//    use TicketitAgentTrait;
//    use TicketitUserTrait;
//
//    protected $table = 'users';
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//}
