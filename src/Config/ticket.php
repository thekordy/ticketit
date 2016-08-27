<?php
/*
|--------------------------------------------------------------------------
| Ticket configuration
|--------------------------------------------------------------------------
|
| Default fields values for the ticket and other ticket data configuration
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | default status id
    |--------------------------------------------------------------------------
    |
    | The default status id value if not submitted by the user
    |
    | options:
    | 'first' to set to the first status
    | 'last' to set to the last status
    | int (1, 2, ..etc) to set to the specified id
    */
    'default_status_id' => 'first',

    /*
    |--------------------------------------------------------------------------
    | default priority id
    |--------------------------------------------------------------------------
    |
    | The default priority id value if not submitted by the user
    |
    | options:
    | 'first' to set to the first priority
    | 'last' to set to the last priority
    | int (1, 2, ..etc) to set to the specified id
    */
    'default_priority_id' => 'first',

    /*
    |--------------------------------------------------------------------------
    | default closed status id
    |--------------------------------------------------------------------------
    |
    | The default closed status id value if not submitted by the user
    | This is used to change the status of the ticket when closed
    |
    | options:
    | 'first' to set to the first status
    | 'last' to set to the last status
    | int (1, 2, ..etc) to set to the specified id
    |
    */
    'default_closed_status_id' => 'last',



];