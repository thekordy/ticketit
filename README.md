## Laravel Ticketit Package
A simple helpdesk tickets system for Laravel 5.1 which integrats smoothly with Laravel default users and auth system

## Current features:
1. Ticket front end
2. Backend dashboard
2. Ticket custom statuses
3. Ticket custom priorities
4. Ticket custom categories
5. Assign Agents to categories
5. Auto agent assignement to new tickets (Search the ticket category agents and choose the agent with the lowest assigned tickets)
6. Ticket comments
7. Set the master view in ticketit config file, and the tickets system will integrate with it.
8. Views are using the bootstrap
9. Authorization for users (create, view own tickets, comment), agents (view and edit assigned tickets), administrators (Agent features + delete, ticketit settings dashboard)

## To Do:
1. Forms validation
2. Users email notifications

### Installation Guide
**First Make sure you have got all dependents working:**

1. Laravel 5.1
2. Users table
3. Auth
4. LaravelCollective HTML

**To install this package:**

Run this code via your terminal
```shell
	composer require kordy/ticketit dev-master
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
**You may publish all files at once**

```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider"
```

**Or you may publish by tags**

Publish the config file (It will generate new file at `config/ticketit.php`. Edit necessary lines.)
```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="config"
```
Publish the views (It will generate views files at `resources/views/vendor/kordy/ticketit/`. Edit necessary lines.)
```shell
	php artisan vendor:publish --provider="Kordy\Ticketit\TicketitServiceProvider" --tag="views"
```

**After publishing the config file config/ticketit.php , edit it for your settings.**

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

## Screenshots
Views integrated in the master view
![ticketit-main](https://cloud.githubusercontent.com/assets/11343048/9098039/ab3fea18-3bc7-11e5-87e5-5655e8b86f9c.png)

My Tickets main user screen
![ticketit-main2](https://cloud.githubusercontent.com/assets/11343048/9098040/ab5705ea-3bc7-11e5-86fd-094572c946cd.png)

Ticket screen with comments (new comments update the ticket)
![ticketit-show](https://cloud.githubusercontent.com/assets/11343048/9098041/ab5c6abc-3bc7-11e5-9808-ba6511fbb259.png)

Agent can view only his own assigned tickets
![ticketit - agent 1 screen](https://cloud.githubusercontent.com/assets/11343048/9225105/8f182d9c-4107-11e5-9cad-878d8a11050b.png)

The ticket screen as shown to agent (the edit button is shown to agents conditionally)
![ticketit - agent 1 show](https://cloud.githubusercontent.com/assets/11343048/9225104/8f14e5ba-4107-11e5-8758-ec05b672fbcb.png)

Agent edit screen
![ticketit - agent 1 edit](https://cloud.githubusercontent.com/assets/11343048/9225103/8f13cd60-4107-11e5-9e3a-fbdf7ff7bbce.png)

Admin edit screen with more features as he can delete the ticket, edit subject and content where are not available for agents.
![ticketit - admin edit](https://cloud.githubusercontent.com/assets/11343048/9225102/8f13d6b6-4107-11e5-9378-f4689b72cb6c.png)
In Edit screen, assign the ticket to another agent, or to use "Auto Select" which will automatically assign the ticket to the agent with least assign tickets within the category selected.

Admin and assign agents to categories
![ticketit-admin-agents](https://cloud.githubusercontent.com/assets/11343048/9098034/ab354ebe-3bc7-11e5-99d6-31b39228861b.png)

Admin custom categories
![ticketit-admin-category](https://cloud.githubusercontent.com/assets/11343048/9098035/ab37628a-3bc7-11e5-9185-9ced8a47d73e.png)

Admin custom priorities
![ticketit-admin-priority](https://cloud.githubusercontent.com/assets/11343048/9098036/ab3b6b00-3bc7-11e5-8d3e-35c43507b8a2.png)

Create custom status (same in creating custom categories and priorities)
![ticketit-admin-status-create](https://cloud.githubusercontent.com/assets/11343048/9098037/ab3e6db4-3bc7-11e5-9c60-1c9204dff69f.png)

Admin custom statuses
![ticketit-admin-status](https://cloud.githubusercontent.com/assets/11343048/9098038/ab3fd898-3bc7-11e5-958c-fb5c21505cc2.png)
