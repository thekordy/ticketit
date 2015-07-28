## Laravel Ticketit Package
A simple helpdesk support tickets system for Laravel 5.1

### Installation Guide

To install this package, you can run this code via your terminal
```shell
	composer require kordy/ticket dev-master
```
Or update your `composer.json` by adding this line
```json
	"kordy/ticket":"dev-master"
```
Then, run this code
```shell
	composer update
```
After install it, you have to add this line on your `app/config/app.php` on Service Providers lines.
```php
	Kordy\Ticketit\TicketitServiceProvider::class
```

### Configuration

Now you may publish the views
```shell
	php artisan vendor:publish --provider="kordy\Ticketit\TicketitServiceProvider" --tag="config"
```
It will generate new file at `config/ticketit.php`. Edit necessary lines.

Now you may publish the views
```shell
	php artisan vendor:publish --provider="kordy\Ticketit\TicketitServiceProvider" --tag="views"
```
It will generate views files at `resources/views/vendor/kordy/ticketit/`. Edit necessary lines.
