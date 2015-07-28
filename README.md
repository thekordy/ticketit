## Laravel Ticketit Package
A simple helpdesk support tickets system for Laravel 5.1

### Installation Guide
First Make sure you have got all dependents working (Laravel 5.1, Users table, Auth, LaravelCollective HTML)

To install this package, you can run this code via your terminal
```shell
	composer require kordy/ticket dev-master
```

After install it, you have to add this line on your `config/app.php` on Service Providers lines.
```php
	Kordy\Ticketit\TicketitServiceProvider::class
```

Install database tables by running the migrate artisan command 
```php
	php artisan migrate --path=vendor/kordy/ticketit/src/migrations
```

### Configuration
You may publish all files at once 
```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider"
```

Or you may publish by tags

Publish the config file
```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="config"
```
It will generate new file at `config/ticketit.php`. Edit necessary lines.

Publish the views
```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="views"
```
It will generate views files at `resources/views/vendor/kordy/ticketit/`. Edit necessary lines.