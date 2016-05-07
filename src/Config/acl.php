<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Super administrators ids
    |--------------------------------------------------------------------------
    |
    | Define whom of the admins are super admins, they will bypass all acl 
    | restrictions.
    | 
     */
    
    'superadmins' => [1],
    
    /*
    |--------------------------------------------------------------------------
    | Route middleware
    |--------------------------------------------------------------------------
    |
    | The middleware class path that is used to apply access policy to the routes
    | 
     */
    
    'middleware' => Kordy\Ticketit\Services\AuthorizeMiddleware::class,

    /*
    |--------------------------------------------------------------------------
    | Abilities policies 
    |--------------------------------------------------------------------------
    |
    | Define the abilities and the policies class methods for each, please note
    | that the default policy is true to allow any authenticated user.
    | example:
    | 'ability-name' => [
    |       'operator (&& or ||)' => 'PolicyClass@method'
    |   ]
    |
    | Available default polices: kordy/ticketit/src/Services/AccessPolices.php
    | 
     */
    
    'abilities' => [
        'ticketit.tickets.index' => [],
        'ticketit.tickets.open' => [],
        'ticketit.tickets.closed' => [],
        'ticketit.create.ticket' => [],
        'ticketit.store.ticket' => [],
        'ticketit.edit.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@ticketAgent' => '&&',
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '||',
        ],
        'ticketit.update.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@ticketAgent' => '&&',
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '||',
        ],
        'ticketit.close.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@ticketOwner' => '&&',
            'Kordy\Ticketit\Services\AccessPolicies@ticketAgent' => '||',
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '||',
        ],
        'ticketit.reopen.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@ticketOwner' => '&&',
            'Kordy\Ticketit\Services\AccessPolicies@ticketAgent' => '||',
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '||',
        ],
        'ticketit.show.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@ticketOwner' => '&&',
            'Kordy\Ticketit\Services\AccessPolicies@isAgent' => '||',
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '||',
        ],
        'ticketit.destroy.ticket' => [
            'Kordy\Ticketit\Services\AccessPolicies@isAdmin' => '&&',
        ],
    ]
];