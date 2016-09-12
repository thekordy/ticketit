<?php

$policies = [
    'user'                  => 'Kordy\Ticketit\Policies\TicketPolicies@isUser',
    'owner'                 => 'Kordy\Ticketit\Policies\TicketPolicies@isOwner',
    'agent'                 => 'Kordy\Ticketit\Policies\TicketPolicies@isAgent',
    'assigned'              => 'Kordy\Ticketit\Policies\TicketPolicies@isAssigned',
    'assigned_team'         => 'Kordy\Ticketit\Policies\TicketPolicies@isAssignedTeam',
    'ticket_category_admin' => 'Kordy\Ticketit\Policies\TicketPolicies@isTicketCategoryAdmin',
    'category_team'         => 'Kordy\Ticketit\Policies\TicketPolicies@isCategoryTeam',
    'category_admin'        => 'Kordy\Ticketit\Policies\TicketPolicies@isCategoryAdmin',
    'administrator'         => 'Kordy\Ticketit\Policies\TicketPolicies@isAdministrator',
];

return [
    /*
    |--------------------------------------------------------------------------
    | Token access
    |--------------------------------------------------------------------------
    |
    | Allow unauthenticated users to access tickets using their access_token.
    |
    */
    'allow_token_access' => true,

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
    | ticket_category_admin: admin of the category that is set to the ticket
    | assigned_Team: agents who are in the same category as the assigned agent
    | category_team: agents who are assigned to specific category (cat id must
    |                be available in the request)
    | category_admin: admin of specific category (user id == category admin_id)
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

        'tickets.index.own' => [
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

        'tickets.index.assigned' => [
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
        | Only $policies['user'], $policies['agent'], $policies['administrator'],
        | $policies['category_team'], and $policies['category_admin'] are applicable.
        |
        */

        'tickets.index.category' => [
            $policies['category_team'],
        ],

        /*
        |--------------------------------------------------------------------------
        | All Tickets index
        |--------------------------------------------------------------------------
        |
        | Get all tickets for all users
        |
        | Only $policies['user'], $policies['agent'], $policies['administrator'],
        | $policies['category_team'], and $policies['category_admin'] are applicable.
        |
        */

        'tickets.index.all' => [
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
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */

        'ticket.show' => [
            $policies['owner'],
            ['or' => $policies['assigned']],
            ['or' => $policies['assigned_team']],
        ],

        /*
        |--------------------------------------------------------------------------
        | Show Ticket fields
        |--------------------------------------------------------------------------
        |
        | Ticket Fields show  permissions
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */
        'ticket.show.id' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.subject' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.content' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.notification_email' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.status_info' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.priority_info' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.category_info' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.agent_info' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.user_info' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.created_at' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.updated_at' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],
        'ticket.show.closed_at' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],

        /*
        |--------------------------------------------------------------------------
        | Store Ticket by user
        |--------------------------------------------------------------------------
        |
        | Store a single ticket
        |
        | Only $policies['user'], $policies['agent'], and $policies['administrator']
        | are applicable.
        |
        */

        'ticket.store' => [
            $policies['user'],
            ['or' => $policies['agent']],
        ],

        /*
        |--------------------------------------------------------------------------
        | Store Ticket fields
        |--------------------------------------------------------------------------
        |
        | Ticket Fields store  permissions
        |
        | Only $policies['user'], $policies['agent'], and $policies['administrator']
        | are applicable.
        |
        */
        // guest_ticket, user_class and user_id allows user to create tickets for others
        'ticket.store.notification_email' => [
            $policies['agent'],
        ],
        'ticket.store.user_class' => [
            $policies['agent'],
        ],
        'ticket.store.user_id' => [
            $policies['agent'],
        ],
        'ticket.store.status_id' => [
            $policies['agent'],
        ],
        'ticket.store.priority_id' => [
            $policies['agent'],
        ],
        'ticket.store.agent_id' => [
            $policies['agent'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Update Ticket by user
        |--------------------------------------------------------------------------
        |
        | Update a single ticket
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */

        'ticket.update' => [
            $policies['owner'],
            ['or' => $policies['agent']],
        ],

        /*
        |--------------------------------------------------------------------------
        | Update Ticket fields
        |--------------------------------------------------------------------------
        |
        | Ticket Fields update permissions
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */
        // guest_ticket, user_class and user_id allows user to create tickets for others
        'ticket.update.notification_email' => [
            $policies['agent'],
        ],
        'ticket.update.user_class' => [
            $policies['agent'],
        ],
        'ticket.update.user_id' => [
            $policies['agent'],
        ],
        'ticket.update.status_id' => [
            $policies['agent'],
        ],
        'ticket.update.priority_id' => [
            $policies['agent'],
        ],
        'ticket.update.agent_id' => [
            $policies['agent'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Delete a Ticket
        |--------------------------------------------------------------------------
        |
        | Delete a single ticket
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */

        'ticket.destroy' => [
            $policies['ticket_category_admin']
        ],

        /*
        |--------------------------------------------------------------------------
        | Close a Ticket
        |--------------------------------------------------------------------------
        |
        | Close a single ticket
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */

        'ticket.close' => [
            $policies['owner'],
            ['or' => $policies['agent']]
        ],

        /*
        |--------------------------------------------------------------------------
        | Reopen a Ticket
        |--------------------------------------------------------------------------
        |
        | Reopen a single ticket
        |
        | Only $policies['owner'], $policies['assigned'], $policies['assigned_team'],
        | $policies['agent'], $policies['ticket_category_admin'],
        | and $policies['administrator'] are applicable.
        |
        */

        'ticket.reopen' => [
            $policies['owner'],
            ['or' => $policies['agent']]
        ],
    ],
];
