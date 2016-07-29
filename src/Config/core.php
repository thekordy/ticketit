<?php

return [

    /*
    |--------------------------------------------------------------------------
    | enable routes
    |--------------------------------------------------------------------------
    |
    | Disable this (set it to false) if you will not use Ticketit routes.
    |
    */

    'enable_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | ACL Handler
    |--------------------------------------------------------------------------
    |
    | Choose which handler to use to handle the users access authorization.
    | The job of the handler is to check the abilities of ticketit resources
    | against users nad return true or false when ticketit ask for the user
    | authorization.
    | ex. When user access Ticketit resource such as a ticket (ticketit.show)
    | Ticketit will check user authorization before permitting access using
    | Laravel authorization, so Ticketit will ask if (
    | $user->can('ticketit.show', $ticket_record)) and expects a boolean answer.
    | So the handler will check if the user has permission to access this specific
    | ticket record and return answer with true or false.
    |
    | for details: https://laravel.com/docs/5.1/authorization
    |
    | options: auzo-tools, auzo, or other (only auzo-tools option that works
    |                                       right now)
    |
    */

    'acl_handler' => 'auzo-tools',
];
