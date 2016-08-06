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
    | api.ticketit.index.own
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
    'api.ticketit.index.own' => [
        'path' => '/api/tickets/own',
        'parameters' => [
            'uses' => 'Kordy\Ticketit\Controllers\TicketsApiController@indexOwn',
            'middleware' => 'auzo.acl:api.ticketit.index.own',
            'as' => 'ticketit.index.own'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | api.ticketit.index.assigned
    |--------------------------------------------------------------------------
    |
    | Get full list of logged in agent's assigned tickets.
    |
    | GET filter params:
    | ------------------
    | same as 'api.ticketit.index.own' filters + user_id filter
    |
    */
    'api.ticketit.index.assigned' => [
        'path' => '/api/tickets/assigned',
        'parameters' => [
            'uses' => 'Kordy\Ticketit\Controllers\TicketsApiController@indexAssigned',
            'middleware' => 'auzo.acl:api.ticketit.index.assigned',
            'as' => 'api.ticketit.index.assigned'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | api.ticketit.index.category
    |--------------------------------------------------------------------------
    |
    | Get full list of tickets in specific category.
    |
    | GET filter params:
    | ------------------
    | same as 'api.ticketit.index.own' filters + user_id  filter
    |
    */
    'api.ticketit.index.category' => [
        'path' => '/api/tickets/category/{id}',
        'parameters' => [
            'uses' => 'Kordy\Ticketit\Controllers\TicketsApiController@indexCategory',
            'middleware' => 'auzo.acl:api.ticketit.index.category',
            'as' => 'api.ticketit.index.category'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | api.ticketit.index.all
    |--------------------------------------------------------------------------
    |
    | Get full list of all tickets.
    |
    | GET filter params:
    | ------------------
    | same as 'api.ticketit.index.own' filters + user_id  filter
    |
    */
    'api.ticketit.index.all' => [
        'path' => '/api/tickets/all',
        'parameters' => [
            'uses' => 'Kordy\Ticketit\Controllers\TicketsApiController@indexAll',
            'middleware' => 'auzo.acl:api.ticketit.index.all',
            'as' => 'api.ticketit.index.all'
        ],
    ],
];
