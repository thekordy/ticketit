<?php

$policies = [
    'user'          => 'Kordy\Ticketit\Policies\TicketPolicies@isUser',
    'owner'         => 'Kordy\Ticketit\Policies\TicketPolicies@isOwner',
    'agent'         => 'Kordy\Ticketit\Policies\TicketPolicies@isAgent',
    'assigned'      => 'Kordy\Ticketit\Policies\TicketPolicies@isAssigned',
    'assigned_team' => 'Kordy\Ticketit\Policies\TicketPolicies@isAssignedTeam',
    'category_team' => 'Kordy\Ticketit\Policies\TicketPolicies@isCategoryTeam',
    'administrator' => 'Kordy\Ticketit\Policies\TicketPolicies@isAdministrator',
];

return [

    /*
    |--------------------------------------------------------------------------
    | Abilities and permissions
    |--------------------------------------------------------------------------
    |
    | These permissions are effective if 'auzo-tools' handler is enabled in
    | 'config/core.php' in ACL handler option.
    |
    | Note: Administrators have access to all resources, so they bypass all
    | authorization checks.
    |
    | For each ability, choose from restriction policies functions:
    |
    | user: any authenticated user
    | owner: the user who created the ticket
    | agent: any agent
    | assigned: the agent who is assigned to the ticket
    | assignedTeam: agents who are in the same category as the assigned agent
    | categoryTeam: agents who are assigned to specific category (cat id must
    |                be available in the request)
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Before policies
    |--------------------------------------------------------------------------
    |
    | This check is done before any other, use it to bypass administrators from
    | any authorization checking.
    |
    */

    'before' => [
        $policies['administrator'],
    ],

    'abilities' => [

        /*
        |--------------------------------------------------------------------------
        | Own Tickets index
        |--------------------------------------------------------------------------
        |
        | Get a list of tickets created for the logged in user (by ticketable_id)
        |
        */

        'api.tickets.index.own' => [
            $policies['user'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Assigned Tickets index
        |--------------------------------------------------------------------------
        |
        | Get a list of tickets assigned for the logged in agent (by ticket agent_id)
        |
        */

        'api.tickets.index.assigned' => [
            $policies['agent'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Category Tickets index
        |--------------------------------------------------------------------------
        |
        | Get all tickets for specific category
        | (by ticket category_id field)
        |
        | Only $policies['user'], $policies['agent'], $policies['administrator']
        | and $policies['categoryTeam'] are applicable.
        |
        */

        'api.tickets.index.category' => [
            $policies['category_team'],
        ],

        /*
        |--------------------------------------------------------------------------
        | All Tickets index
        |--------------------------------------------------------------------------
        |
        | Get all tickets for all users
        |
        | Only $policies['user'], $policies['agent'], $policies['administrator']
        | and $policies['categoryTeam'] are applicable.
        |
        */

        'api.tickets.index.all' => [
            $policies['administrator'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Show Ticket
        |--------------------------------------------------------------------------
        |
        | Show a single ticket
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], and $policies['administrator'] are applicable.
        |
        */

        'api.ticket.show' => [
            $policies['owner'],
            ['or' => $policies['assigned']],
            ['or' => $policies['assigned_team']],
        ],
    ],
];