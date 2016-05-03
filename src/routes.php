<?php

// Ticketit index page where we display all user tickets
Route::get(config('ticketit.routes.tickets-index.path'),
    array_merge(['as' => 'ticketit.ticket.index'], config('ticketit.routes.tickets-index.parameters'))
);
