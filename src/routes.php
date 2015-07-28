<?php
//Ticket public route
Route::resource(config('ticketit.main_route'), 'Kordy\Ticketit\Controllers\TicketsController');

//Ticket admin routes (ex. http://url/tickets-admin/status)
Route::resource(config('ticketit.admin_route').'/status', 'Kordy\Ticketit\Controllers\StatusesController');

//Ticket admin routes (ex. http://url/tickets-admin/priority)
Route::resource(config('ticketit.admin_route').'/priority', 'Kordy\Ticketit\Controllers\PrioritiesController');