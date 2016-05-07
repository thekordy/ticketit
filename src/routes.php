<?php

// Index page
Route::get(config('ticketit.routes.tickets-index.path'),
    array_merge(['as' => 'ticketit.tickets.index'], config('ticketit.routes.tickets-index.parameters'))
);

// user's open tickets
Route::get(config('ticketit.routes.tickets-open.path'),
    array_merge(['as' => 'ticketit.tickets.open'], config('ticketit.routes.tickets-open.parameters'))
);

// user's open tickets
Route::get(config('ticketit.routes.edit-ticket.path'),
    array_merge(['as' => 'ticketit.edit.ticket'], config('ticketit.routes.edit-ticket.parameters'))
);
