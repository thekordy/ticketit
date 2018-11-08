# Ticketit app

ticketit-with-places
This is a Laravel 5.6 application with [Ticketit](https://github.com/thekordy/ticketit) pre-installed in it. This is meant to make installation of Ticketit as quick as possible and easier for those who are not familiar with Laravel.
=======
A simple helpdesk tickets system for Laravel 5.1+ (5.1, 5.2, 5.3, 5.4, 5.5, 5.6 and 5.7) which integrates smoothly with Laravel default users and auth system. 
It will integrate into your current Laravel project within minutes, and you can offer your customers and your team a nice and simple support ticket system. 
0.2

Install this only if you'd like to install Ticketit as a standalone app. If you'd like to integrate Ticketit to your existing Laravel project, follow the maunual [installation guide](https://github.com/thekordy/ticketit#installation-manual) of the Ticketit repository.

## Installation

Open a terminal at the desired installation destination and run:

```
composer create-project --prefer-dist balping/ticketit-app ticketit
```

This pulls in all necessary libraries. Then cd into the installation directory and run the install script:

```
cd ticketit
php artisan ticketit:install
```

This asks some questions (database parameters, admin account login details).

The installation script will do pretty much everything for you to have Ticketit up and running. After installation is done, you might want to set up mail by editing the `.env` file and go through the settings in the admin panel.

## Notes

Please send Ticketit-related bugreports to the [Ticketit repo](https://github.com/thekordy/ticketit/issues). Only installer-related problems should be reported here.

If you move your installation folder to another path, you need to update the row with `slug='routes'` in table `ticketit_settings`.

## Versions

| Laravel | Ticketit app |
|---------|--------------|
| 5.4.\*  | 1.0.\*       |
| 5.5.\*  | 1.1.\*       |
| 5.6.\*  | 1.2.\*       |

## Installation in 56 seconds

![screen](https://cloud.githubusercontent.com/assets/5840038/23286505/e5dc5080-fa2f-11e6-92ba-032816b64444.gif)
