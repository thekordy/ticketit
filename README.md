## Support tickets system package for Laravel
A simple helpdesk tickets system for Laravel 5.1 which integrates smoothly with Laravel default users and auth system

### Features:
1. Three main users roles users, agents, and admins
2. Users can create tickets 
3. Users can keep track of their tickets status
4. Auto assigning to agents, the system searches for agents in specific department and auto select the agent with lowest queue
5. Agents can view and modify their own assigned tickets 
6. Agents can communicate with ticket issuers through ticket comments
7. Auto email notifications to ticket participants (ticket owner, assigned agent) when ticket is updated or there is a new comment
8. Simple admin panel 
9. Administrators can add agents, create custom statuses, categories/departments, priorities, and manage tickets and comments.
10. Tickets access restrictions (Only ticket owner, an agent, or an admin whom has access to the ticket)
11. Settings option to allow agents access to all tickets or to restrict agents access to only their assigned tickets
12. Forms validation

### To Do:
1. Localization
2. Tickets filters and search
3. Dashboard stats and graphs
4. Configurable Start and Close statuses (From admin panel)

## Installation
** Please make sure you've got all dependencies installed and working in config\app.php:**

1. [Laravel 5.1](http://laravel.com/docs/5.1#installation)
2. [Users table](http://laravel.com/docs/5.1/authentication)
3. [LaravelCollective HTML](http://laravelcollective.com/docs/5.1/html#installation)
4. [Yajra Laravel Datatables](https://github.com/yajra/laravel-datatables)
5. [Laravel email configuration](http://laravel.com/docs/5.1/mail#sending-mail)

**To install this package:**

Run this code via your terminal
```shell
	composer require kordy/ticketit:0.*
```

After install it, you have to add this line on your `config/app.php` on Service Providers lines.
```php
	Kordy\Ticketit\TicketitServiceProvider::class,
```

Install database tables by running the migrate artisan command 
```php
	php artisan migrate --path=vendor/kordy/ticketit/src/Migrations
```

## Configuration
**Publish views:**

```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider"
```

**Merge old or new installations and seed database:**

Seed the database with configuration. Works with 0.1 branch updates. Renames config/ticketit.php (legacy) to config/ticketit.php.backup.
```shell
	php artisan db:seed --class=Kordy\\Ticketit\\Seeds\\SettingsTableSeeder
```

**Be sure to implement these views sections in your master template in order to integrate with the ticketit views:**

Page section for passing the current page title
```blade
<header> ...
<title>My website - @yield('page')</title>
</header>
```
Content section for the content
```blade
<body> ...
@yield('content')
...
</body>
```

Footer section for passing the jquery scripts, so make sure it is called after you call the jquery
```blade
<body> ...
@yield('content')
...
<script src="/js/jquery.min.js"></script>
..
@yield('footer')
</body>
```
### Documentation
[Ticketit Wiki](https://github.com/thekordy/ticketit/wiki)

### Live Demo
A live demo is hosted by fusion design at http://ticketit.fusiondesign.me

### Screenshots
[Screenshots of current features](https://github.com/thekordy/ticketit/issues/3)
