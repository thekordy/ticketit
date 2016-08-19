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
    | api routes
    |--------------------------------------------------------------------------
    |
    | can be disabled from config/ticketit/core.php
    |
    */
    'api' => [

        /*
        |--------------------------------------------------------------------------
        | API tickets.index.own
        |--------------------------------------------------------------------------
        |
        | Get full list of logged in user's owned tickets.
        |
        | GET filter params:
        | ------------------
        | 1. subject=(string)           ticket subject that contains contains string
        | 2. content=(string)           ticket body that contains string
        | 3. category_id=(int)          by category_id
        | 4. type=(open/closed)         choose only open or closed tickets
        | 5. status_id=(int)            by status_id
        | 6. priority_id=(int)          by priority_id
        | 7. agent_id=(int)             by agent_id
        | 8. created_before=(date)      tickets created before date
        | 9. created_after=(date)       tickets created after date
        | 10. closed_before=(date)      tickets closed before date
        | 11. closed_after=(date)       tickets closed after date
        |
        */
        'tickets.index.own' => [
            'path'       => '/api/tickets/own',
            'parameters' => [
                'uses'       => 'Kordy\Ticketit\Controllers\TicketsApiController@indexOwn',
                'middleware' => 'auzo.acl:api.tickets.index.own',
                'as'         => 'api.tickets.index.own',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | API tickets.index.assigned
        |--------------------------------------------------------------------------
        |
        | Get full list of logged in agent's assigned tickets.
        |
        | GET filter params:
        | ------------------
        | same as 'api.tickets.index.own' filters + user_id filter
        |
        */
        'tickets.index.assigned' => [
            'path'       => '/api/tickets/assigned',
            'parameters' => [
                'uses'       => 'Kordy\Ticketit\Controllers\TicketsApiController@indexAssigned',
                'middleware' => 'auzo.acl:api.tickets.index.assigned',
                'as'         => 'api.tickets.index.assigned',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | API tickets.index.category
        |--------------------------------------------------------------------------
        |
        | Get full list of tickets in specific category.
        |
        | GET filter params:
        | ------------------
        | same as 'api.tickets.index.own' filters + user_id  filter
        |
        */
        'tickets.index.category' => [
            'path'       => '/api/tickets/category/{id}',
            'parameters' => [
                'uses'       => 'Kordy\Ticketit\Controllers\TicketsApiController@indexCategory',
                'middleware' => 'auzo.acl:api.tickets.index.category',
                'as'         => 'api.tickets.index.category',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | API tickets.index.all
        |--------------------------------------------------------------------------
        |
        | Get full list of all tickets.
        |
        | GET filter params:
        | ------------------
        | same as 'api.tickets.index.own' filters + user_id  filter
        |
        */
        'tickets.index.all' => [
            'path'       => '/api/tickets/all',
            'parameters' => [
                'uses'       => 'Kordy\Ticketit\Controllers\TicketsApiController@indexAll',
                'middleware' => 'auzo.acl:api.tickets.index.all',
                'as'         => 'api.tickets.index.all',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | API ticket.show
        |--------------------------------------------------------------------------
        |
        | Show a single ticket
        |
        */
        'ticket.show' => [
            'path'       => '/api/tickets/{id}',
            'parameters' => [
                'uses'       => 'Kordy\Ticketit\Controllers\TicketsApiController@show',
                'middleware' => 'auzo.acl:api.ticket.show',
                'as'         => 'api.ticket.show',
            ],
        ],
    ],
];
