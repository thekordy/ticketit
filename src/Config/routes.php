<?php
/*
|--------------------------------------------------------------------------
| Ticketit routes
|--------------------------------------------------------------------------
|
| Here we define every route path, action, and middleware. You can customize
| routes paths and custom parameters for each path including
| ('uses', 'middleware', 'where', ..etc) 
|
*/

// to load 'web' middleware if Laravel version == "5.2"
// ex: 'middleware' => ($laravel_version == "5.2") ? ['web', 'auth'] : 'auth'
$laravel_version = substr(\App::VERSION(), 0, 3);

return [
    /*
    |--------------------------------------------------------------------------
    | enable routes
    |--------------------------------------------------------------------------
    |
    | Disable this (set it to false) if you will not use Ticketit controllers 
    | and features, Only models APIs Facades will be available.
    |
    */
    
    'enable' => true,
    
    /*
    |--------------------------------------------------------------------------
    | ticketit.ticket.index
    |--------------------------------------------------------------------------
    |
    | It's the main index page where a full list of tickets are displayed for
    | the user.
    |
    */
    'tickets-index' => [
        'path' => '/ticket',
        'parameters' => [
            'uses' => 'Kordy\Ticketit\Controllers\TicketsController@index',
            'middleware' => ($laravel_version == "5.2") ? ['web', 'auth'] : 'auth'
        ]
    ]
];