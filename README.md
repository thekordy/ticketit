# This package is still under active development and not for a production usage!

A simple helpdesk tickets system for Laravel v5.1 and v5.2 which integrates smoothly with Laravel default users and auth system.

# Index:
1. [Pre-installation Requirements](#pre-installation-requirements)
2. [Installation](#installation)

## Pre-installation Requirements
This package depends on several other packages that must be installed and properly configured.

1. [Laravel 5.1 or 5.2](https://laravel.com/docs/5.1#installation)
2. [Auzo for authorization management](https://github.com/thekordy/auzo#installation)
3. [Ticketit API](#)

### Features Requirements
Several features of Ticketit depend on specific configurations that must be configured correctly before you run Ticketit.

#### Users, agents, and administration requirement
Authentication and authorization are core functions of Ticketit and that requires: 
1. Laravel authentication to be present and working ([v5.1 authentication quickstart](http://stackoverflow.com/questions/30980906/laravel-5-1-app-and-home-blade-php-missing/31018306#31018306), [v5.2 authentication quickstart](https://laravel.com/docs/5.2/authentication#authentication-quickstart))
2. [Auzo](https://github.com/thekordy/auzo) and [Auzo Tools](https://github.com/thekordy/auzo-tools) packages for [ABAC](https://en.wikipedia.org/wiki/Attribute-Based_Access_Control) authorization management

## Installation

### Using the auto install script
**Coming soon** *Auto Install script will get all requirements installed and ready through the artisan command wizard.*
 
### Manual Installation
**First make sure you have got all [Pre-installation Requirements](#pre-installation-requirements) installed and configured.**

Using composer command:
```bash
composer require kordy/ticketit:2.0.x-dev
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
**Note:** *If you want to add or change Ticketit fields, do not proceed to the next step (`php artisan migrate`) and follow [Ticketit fields customization guide](#)*

After the migration has been published you can create the Ticketit tables using the artisan command:
```bash
php artisan migrate
```

Publish Ticketit config files using the artisan command:
```bash
php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="config"
```
Ticketit config files will be located at `config/ticketit/` directory.

