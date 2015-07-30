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
    'master_template' => 'master'
];