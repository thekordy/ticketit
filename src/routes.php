<?php

Route::group(['middleware' => \Kordy\Ticketit\Helpers\LaravelVersion::authMiddleware()], function () use ($main_route, $admin_route) {
    //Route::group(['middleware' => '', function () use ($main_route) {
    //Ticket public route
    Route::get("$main_route/complete", 'Kordy\Ticketit\Controllers\TicketsController@indexComplete')
            ->name("$main_route-complete");
    Route::get("$main_route/data/{id?}", 'Kordy\Ticketit\Controllers\TicketsController@data')
            ->name("$main_route.data");
    Route::resource($main_route, 'Kordy\Ticketit\Controllers\TicketsController');

    //Ticket Comments public route
    Route::resource("$main_route-comment", 'Kordy\Ticketit\Controllers\CommentsController');

    //Ticket complete route for permitted user.
    Route::get("$main_route/{id}/complete", 'Kordy\Ticketit\Controllers\TicketsController@complete')
            ->name("$main_route.complete");

    //Ticket reopen route for permitted user.
    Route::get("$main_route/{id}/reopen", 'Kordy\Ticketit\Controllers\TicketsController@reopen')
            ->name("$main_route.reopen");

    //Download Attachments
    Route::get("$main_route/download/file-id={file}", 'Kordy\Ticketit\Controllers\AttachmentsController@getattachment')
            ->name('getattachment');
    //Get Emails
    Route::get('/getemails', 'Kordy\Ticketit\Controllers\EmailsController@getemails')
            ->name('getemails');
    //});

    Route::group(['middleware' => 'Kordy\Ticketit\Middleware\IsAgentMiddleware'], function () use ($main_route) {

        //API return list of agents in particular category
        Route::get("$main_route/agents/list/{category_id?}/{ticket_id?}", [
            'as'   => $main_route.'agentselectlist',
            'uses' => 'Kordy\Ticketit\Controllers\TicketsController@agentSelectList',
        ]);
    });

    Route::group(['middleware' => 'Kordy\Ticketit\Middleware\IsAdminMiddleware'], function () use ($admin_route) {
        //Ticket admin index route (ex. http://url/tickets-admin/)
        Route::get("$admin_route/indicator/{indicator_period?}", [
            'as'   => 'dashboard.indicator',
            'uses' => 'Kordy\Ticketit\Controllers\DashboardController@index',
        ]);
        Route::get($admin_route, 'Kordy\Ticketit\Controllers\DashboardController@index');

        //Ticket statuses admin routes (ex. http://url/tickets-admin/status)
        Route::resource("$admin_route/status", 'Kordy\Ticketit\Controllers\StatusesController');

        //Ticket priorities admin routes (ex. http://url/tickets-admin/priority)
        Route::resource("$admin_route/priority", 'Kordy\Ticketit\Controllers\PrioritiesController');

        //Agents management routes (ex. http://url/tickets-admin/agent)
        Route::resource("$admin_route/agent", 'Kordy\Ticketit\Controllers\AgentsController');

        //Agents management routes (ex. http://url/tickets-admin/agent)
        Route::resource("$admin_route/category", 'Kordy\Ticketit\Controllers\CategoriesController');

        //Settings configuration routes (ex. http://url/tickets-admin/configuration)
        Route::resource("$admin_route/configuration", 'Kordy\Ticketit\Controllers\ConfigurationsController');

        //Administrators configuration routes (ex. http://url/tickets-admin/administrators)
        Route::resource("$admin_route/administrator", 'Kordy\Ticketit\Controllers\AdministratorsController');

        //Tickets demo data route (ex. http://url/tickets-admin/demo-seeds/)
        // Route::get("$admin_route/demo-seeds", 'Kordy\Ticketit\Controllers\InstallController@demoDataSeeder');
    });
});
