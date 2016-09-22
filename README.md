# Ticketit

A simple helpdesk tickets system for Laravel 5.1+ which integrates smoothly with Laravel default users and auth system. 
It will integrate into your current Laravel project within minutes, and you can offer your customers and your team a nice and simple support ticket system. 

## Features:
1. Three main users roles users, agents, and admins
2. Users can create tickets, keep track of their tickets status, giving comments, and close their own tickets (access permissions are configurable)
3. Auto assigning agents to tickets, the system searches for agents in specific department and auto select the agent with lowest queue
4. Simple admin panel 
5. Localization (Arabic, Brazilian Portuguese, English, Hungarian, and Germany language packs are included)
6. Very simple installation and integration process
7. Admin dashboard with statistics and performance tracking graphs
8. Simple text editor for tickets descriptions and comments allows images upload

[Full features list (12+) and screen shots](https://github.com/thekordy/ticketit/wiki/v0.2.3-Features)

## Requirements
**First Make sure you have got this Laravel setup working:**

1. [Laravel 5.1](http://laravel.com/docs/5.1#installation) or [Laravel 5.2](http://laravel.com/docs/5.2#installation)
2. [Users table](http://laravel.com/docs/5.2/authentication)
3. [Laravel email configuration](http://laravel.com/docs/5.2/mail#sending-mail)
4. Bootstrap 3+
5. Jquery

**Dependents that are getting installed and configured automatically by Ticketit (no action required from you)**

1. [LaravelCollective HTML](https://github.com/laravelcollective/html)
2. [Laravel Datatables](https://github.com/yajra/laravel-datatables)
3. [HTML Purifier](https://github.com/mewebstudio/Purifier)

## Installation (4-8 minutes):

Step 1. Run this code via your terminal (1-2 minutes)
```shell
	composer require kordy/ticketit:0.*
```

Step 2. After install, you have to add this line on your `config/app.php` in Service Providers section (1-2 minutes).
```php
	Kordy\Ticketit\TicketitServiceProvider::class,
```

Step 3. [Setting up your master view for Ticketit integration (1-2 minutes)](https://github.com/thekordy/ticketit/wiki/Integrating-Ticketit-views-with-your-project-template)

Step 4. [Check if App\User exists](https://github.com/thekordy/ticketit/wiki/Make-sure-that-App%5CUser-exists)

Step 5. Go ahead to http://your-project-url/tickets-install to finalize the installation (1-2 minutes)

Default ticketit front route: http://your-project-url/tickets

Default ticketit admin route: http://your-project-url/tickets-admin

## Documentation
[Ticketit Wiki](https://github.com/thekordy/ticketit/wiki)

## Support:
[Review features requests, give your feedback, suggest features, report issues](https://github.com/thekordy/ticketit/issues)

## Live Demo
http://ticketit.kordy.info/tickets

## Credits
Big thank you for all active people who took from their time to give their feedback and suggestions, they helped a lot to improve Ticketit for all of us.

**Project contributors (the project heros):**
https://github.com/thekordy/ticketit/graphs/contributors
