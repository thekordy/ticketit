<?php
/*
|--------------------------------------------------------------------------
| Ticketit routes
|--------------------------------------------------------------------------
|
| Here we define every route path, action, and middleware. You can customize
| routes paths and put whatever custom actions for each path, and to use
| middleware if needed.
|
*/

// to load 'web' middleware if Laravel version == "5.2"
// ex: 'middleware' => ($laravel_version == "5.2") ? ['web', 'auth'] : 'auth'
$laravel_version = substr(\App::VERSION(), 0, 3);

return [
    /*
    |--------------------------------------------------------------------------
    | ticketit.index
    |--------------------------------------------------------------------------
    |
    | It's the main index page where a full list of tickets are displayed for
    | the user.
    |
    */
    'index' => [
        'path' => '/tickets',
        'action' => 'Kordy\Ticketit\Controllers\TicketsController@index',
        'middleware' => ($laravel_version == "5.2") ? ['web', 'auth'] : 'auth'
    ]
];