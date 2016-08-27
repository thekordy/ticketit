<?php

$agent_model = app('TicketitAgent');
$status_model = app('TicketitStatus');
$priority_model = app('TicketitPriority');
$category_model = app('TicketitCategory');

/*
|--------------------------------------------------------------------------
| Requests validation
|--------------------------------------------------------------------------
|
| Rules to be applied on requests inputs using Laravel validation
| see https://laravel.com/docs/5.1/validation
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Ticket store request validation
    |--------------------------------------------------------------------------
    |
    | Validation rules for new ticket requests
    |
    */
    'user_ticket_store' => [
        /*
         * see https://laravel.com/docs/5.1/validation
         * see https://github.com/thekordy/auzo-tools/#controller-authorize-validation-rule
         */
        'rules' => [
            'user_class'    => 'auzo.can:ticket.store.user_class',
            'user_id'       => 'auzo.can:ticket.store.user_id',
            'subject'       => 'required|min:8',
            'content'       => 'required|min:24',
            'category_id'   => 'required|exists:' . $category_model->getTable() . ',' . $category_model->getKeyName(),
            'status_id'     => 'auzo.can:ticket.store.status_id|exists:' . $status_model->getTable() . ',' . $status_model->getKeyName(),
            'priority_id'   => 'auzo.can:ticket.store.priority_id|exists:' . $priority_model->getTable() . ',' . $priority_model->getKeyName(),
            'agent_id'      => 'auzo.can:ticket.store.agent_id|exists:' . $agent_model->getTable() . ',' . $agent_model->getKeyName(),
        ],
    ],
];