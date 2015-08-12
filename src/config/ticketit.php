<?php

return [

    /*
    * Ticketit main route: Where to load the ticket system (ex. http://url/tickets)
    * Default: /ticket
    */
    'main_route' => 'tickets',

    /*
    * Ticketit admin route: Where to load the ticket administration dashboard (ex. http://url/tickets-admin)
    * Default: /ticket
    */
    'admin_route' => 'tickets-admin',

    /*
    * Template adherence: The master blade template to be extended
    * Default: resources/views/master.blade.php
    */
    'master_template' => 'master',

    /*
    * The default status for new created tickets
    * Default: 1
    */
    'default_status_id' => 1,

    /*
    * User ids who are members of admin role
    * Default: 1
    */
    'admin_ids' => [2],

    /*
    * Pagination length: number of items shown per page
    * Default: 1
    */
    'paginate_items' => 10
];