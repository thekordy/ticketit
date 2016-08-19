<?php

if (config('ticketit.core.enable_api_routes')) {
    $api_routes = config('ticketit.routes.api');

    foreach ($api_routes as $api_route) {
        Route::get($api_route['path'], $api_route['parameters']);
    }
}

if (config('ticketit.core.enable_ui_routes')) {

    // load UI routes
}
