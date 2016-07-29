# This package is still under active development and not for a production usage!

A simple helpdesk tickets system for Laravel v5.1 which integrates smoothly with Laravel default users and auth system.

*For Laravel 5.2, use [Ticketit v2.2.x](#) 

[Read more about Ticketit 2.1 directions and overview on code extensibility](https://github.com/thekordy/ticketit/issues/184#issuecomment-216339131)

# Index:
1. [Pre-installation Requirements](#pre-installation-requirements)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Ticketit API](#api)
5. [Ticketit Customization](#customization)
6. [Roadmap](#roadmap)

## Pre-installation Requirements
This package depends on several other packages that must be installed and properly configured.

1. [Laravel 5.1](https://laravel.com/docs/5.1#installation)
2. [Auzo-tools for Laravel authorization management](https://github.com/thekordy/auzo-tools)

### Features Requirements
Several features of Ticketit depend on specific configurations that must be configured correctly before you run Ticketit.

#### Users, agents, and administration requirement

Authentication and authorization are core functions of Ticketit and that requires: 

1. Laravel authentication to be present and working ([v5.1 authentication quickstart](http://stackoverflow.com/questions/30980906/laravel-5-1-app-and-home-blade-php-missing/31018306#31018306), [v5.2 authentication quickstart](https://laravel.com/docs/5.2/authentication#authentication-quickstart))
2. Laravel authorization to handle users access to Ticketit resources, by default Ticketit depends on [Auzo-tools](https://github.com/thekordy/auzo-tools), but you can disable this from `config/core.php` and use you own Abilities management as long as it handles Ticketit abilities configured in `config/acl.php`.

## Installation

### Using the auto install script
**Coming soon** *Auto Install script will get all requirements installed and ready through the artisan command wizard.*
 
### Manual Installation
**First make sure you have got all [Pre-installation Requirements](#pre-installation-requirements) installed and configured.**

Using composer command:
```bash
composer require kordy/ticketit:2.1.x-dev
```

Add Ticketit service provider to the `providers` section in `config/app.php` file
```php
'providers' => [
    ...
    Kordy\Ticketit\TicketitServiceProvider::class,
];
```

Publish migrations (database schemes) to `database/migrations/` directory using the artisan command:
```bash
php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="migrations"
```
**Note:** *If you want to add or change Ticketit fields, do not proceed to the next step (`php artisan migrate`) and follow [Ticketit customization guide](#customization)*

After the migration has been published you can create the Ticketit tables using the artisan command:
```bash
php artisan migrate
```

Publish Ticketit config files using the artisan command:
```bash
php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="config"
```
Ticketit config files will be located at `config/ticketit/` directory.

Assign `TicketitAdminTrait`, `TicketitAgentTrait`, and `TicketitUserTrait` to the corresponding models, if you only have one users model for all roles:

Ex:
```php
use Kordy\Ticketit\Traits\TicketitAdminTrait;
use Kordy\Ticketit\Traits\TicketitAgentTrait;
use Kordy\Ticketit\Traits\TicketitUserTrait;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, TicketitAdminTrait, TicketitAgentTrait, TicketitUserTrait;
    ...
    
```

## Configuration

The system is fully customizable, you can replace any of the system functionality using your own models and controllers, adjust system models and controllers paths from the configuration files.

`config/ticketit` directory index:

- core.php (core settings like enable front-end routes)
- models.php (models paths and settings)
- routes.php (routes and controllers paths and middlewares)
- acl.php (abilities and authorization for different users roles)

## API

Basically you can use the Ticketit Facades to do everything: 

### Available Facades:
1. TicketitAdmin [see Traits/TicketitAdminTrait]
2. TicketitAgent [see Traits/TicketitAgentTrait]
3. TicketitCategory [see Traits/TicketitCategoryTrait]
4. TicketitComment [see Traits/TicketitCommentTrait]
5. TicketitPriority [see Traits/TicketitPriorityTrait]
6. TicektitStatus [see Traits/TicketitStatusTrait]
7. TicketitTicket [see Traits/TicketitTicketTrait]
8. TicketitUser [see Traits/TicketitUserTrait]

Example:

```php
TicketitTicket::create(array(ticket fields here))
```


## Customization

### Custom fields

So let's say you need to add more fields to the ticket (or even to change its relations or to add new relations or change the table altogether), it's easy:

1. Make a migration to alter ticket table to add new columns.
2. Copy TicketTicket model to the App folder and change namespace and $fillable.
3. Overwrite any of the TicketTicketTrait default functions and ticket relations (if needed).
4. Change the tickets model path in the models config file (found in config/ticketit/models.php after publish).

After that, developer can still use same API `TicketitTicket::create([ the new custom fields ])` with the new custom fields.

### Custom logic/functions

Now let's say you need to modify something in the logic or to replace a controller function, that's easy too:

1. Create new controller at app controllers folder.
2. Extend the Ticketit controller you need modify.
3. Modify the `config/ticketit/routes.php` to change the action path.

Ex.
```php
    'tickets-index' => [
        'path' => '/tickets',
        'action' => 'Kordy\Ticketit\Controllers\TicketsController@index',
        'middleware' => 'auth'
    ]
```

to
```php
    'tickets-index' => [
        'path' => '/tickets',
        'action' => 'App\Http\Controllers\TicketsController@index',
        'middleware' => 'auth'
    ]
```


## Roadmap

[Join our discussion at Ticketit 2.1 directions post](https://github.com/thekordy/ticketit/issues/184#issuecomment-216339131)

1. index page with search / filter functionality
2. agent management
3. Auto assignment
4. wysiwyg editor [optional]
5. attachments (that could belong to comments as well) [optional]
6. email notifications (but not imap parse yet) [optional]
7. close / reopen statuses
8. nice admin dash with charts [optional]
9. public issue opening (no registered user required) with captcha and tracking code [optional] [new]
10. Multiple themes, to provide users with multiple options such as lite theme without javascript, another with vue.js, also developers can create their own theme for Ticketit without the need to overwrite the default views files. [optional]
11. Using Laravel native authorization to authorize owner, agent, team, and admin actions 

[optional] means it could be turned on/off in config files, the rest should belong to core functionality.