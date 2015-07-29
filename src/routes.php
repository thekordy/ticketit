<?php
//Ticket public route
Route::resource(config('ticketit.main_route'), 'Kordy\Ticketit\Controllers\TicketsController');

//Ticket admin index route (ex. http://url/tickets-admin/)
Route::get(config('ticketit.admin_route'), 'Kordy\Ticketit\Controllers\PagesController@index');

//Ticket statuses admin routes (ex. http://url/tickets-admin/status)
Route::resource(config('ticketit.admin_route').'/status', 'Kordy\Ticketit\Controllers\StatusesController');

//Ticket priorities admin routes (ex. http://url/tickets-admin/priority)
Route::resource(config('ticketit.admin_route').'/priority', 'Kordy\Ticketit\Controllers\PrioritiesController');