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
    'tickets-index' => [
        'path'       => '/tickets',
        'parameters' => [
            'uses'       => 'Kordy\Ticketit\Controllers\TicketsController@index',
            'middleware' => 'auth',
        ],
    ],
];
