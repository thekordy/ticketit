<?php


$user_model = config('auth.model') ?: config('auth.providers.users.model');

return [
    /*
    |--------------------------------------------------------------------------
    | Polymorphic Relations / Custom Polymorphic Types
    |--------------------------------------------------------------------------
    |
    | Define a relationship "morph map" to instruct Eloquent to use the table
    | name associated with each model instead of the class name.
    | If you use user's models beside user model such as agent or admin, you have
    | to put them here ex.
    | 'morphmap' => [
    |        'user' => $user_model,
    |        'agent' => App\Agent::class,
    |        'admin' => App\Admin::class
    |    ],
    |
    */

    'morphmap' => [
        'user' => $user_model
    ],

    /*
    |--------------------------------------------------------------------------
    | Models paths
    |--------------------------------------------------------------------------
    |
    | All the models are reloaded from the paths configured here, if you want
    | to use custom tables or to customize models, then copy the desired model
    | to your app folder, add the related trait to it, and replace this model path
    |
    */
    
    "user" => $user_model,

    "agent" => $user_model,

    "admin" => $user_model,

    "status" => \Kordy\Ticketit\Models\TicketitStatus::class,

    "priority" => \Kordy\Ticketit\Models\TicketitPriority::class,

    "category" => \Kordy\Ticketit\Models\TicketitCategory::class,

    "ticket" => \Kordy\Ticketit\Models\TicketitTicket::class,

    "comment" => \Kordy\Ticketit\Models\TicketitComment::class,
];