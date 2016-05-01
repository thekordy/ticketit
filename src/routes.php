<?php

// Ticketit index page where we display all user tickets list
Route::get(config('ticketit.routes.index.path'),
    [
        'as' => 'ticketit.index',
        'uses' => config('ticketit.routes.index.action'),
        'middleware' => config('ticketit.routes.index.middleware')
    ]
);
