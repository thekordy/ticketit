<?php

$routes = config('ticketit.routes');

foreach ($routes as $route) {
    Route::get($route['path'], $route['parameters']);
}
