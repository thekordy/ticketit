<?php

if (config('ticketit.core.enable_api_routes')) {
    $api_routes = config('ticketit.routes.api');

    foreach ($api_routes as $api_route) {
        switch ($api_route['method']) {
            case 'post':
                Route::post($api_route['path'], $api_route['parameters']);
                break;
            case 'put':
                Route::put($api_route['path'], $api_route['parameters']);
                break;
            case 'delete':
                Route::delete($api_route['path'], $api_route['parameters']);
                break;
            case 'any':
                Route::any($api_route['path'], $api_route['parameters']);
                break;
            default:
                Route::get($api_route['path'], $api_route['parameters']);
                break;
        }
    }
}

if (config('ticketit.core.enable_ui_routes')) {

    // load UI routes
}
