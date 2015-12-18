<?php

Route::group(['middleware' => 'auth'], function () use ($main_route) {
	//Ticket public route
	get("$main_route/complete", 'Kordy\Ticketit\Controllers\TicketsController@indexComplete')
		->name("$main_route-complete");
	get("$main_route/data/{id?}", 'Kordy\Ticketit\Controllers\TicketsController@data')
		->name("$main_route.data");
	resource($main_route, 'Kordy\Ticketit\Controllers\TicketsController');

	//Ticket Comments public route
	resource("$main_route-comment", 'Kordy\Ticketit\Controllers\CommentsController');

	//Ticket complete route for permitted user.
	get("$main_route/{id}/complete", 'Kordy\Ticketit\Controllers\TicketsController@complete')
		->name("$main_route.complete");

	//Ticket reopen route for permitted user.
	get("$main_route/{id}/reopen", 'Kordy\Ticketit\Controllers\TicketsController@reopen')
		->name("$main_route.reopen");

	//Download Attachments
	get("$main_route/download/file-id={file}", 'Kordy\Ticketit\Controllers\AttachmentsController@getattachment')
		->name("getattachment");
});

Route::group(['middleware' => 'Kordy\Ticketit\Middleware\IsAgentMiddleware'], function () use ($main_route) {

	//API return list of agents in particular category
	get("$main_route/agents/list/{category_id?}/{ticket_id?}", [
		'as' => $main_route . 'agentselectlist',
		'uses' => 'Kordy\Ticketit\Controllers\TicketsController@agentSelectList',
	]);
});

Route::group(['middleware' => 'Kordy\Ticketit\Middleware\IsAdminMiddleware'], function () use ($admin_route) {
	//Ticket admin index route (ex. http://url/tickets-admin/)
	get("$admin_route/indicator/{indicator_period?}", [
			'as' => 'dashboard.indicator',
			'uses' => 'Kordy\Ticketit\Controllers\DashboardController@index'
	]);
	get($admin_route, 'Kordy\Ticketit\Controllers\DashboardController@index');

	//Ticket statuses admin routes (ex. http://url/tickets-admin/status)
	resource("$admin_route/status", 'Kordy\Ticketit\Controllers\StatusesController');

	//Ticket priorities admin routes (ex. http://url/tickets-admin/priority)
	resource("$admin_route/priority", 'Kordy\Ticketit\Controllers\PrioritiesController');

	//Agents management routes (ex. http://url/tickets-admin/agent)
	resource("$admin_route/agent", 'Kordy\Ticketit\Controllers\AgentsController');

	//Agents management routes (ex. http://url/tickets-admin/agent)
	resource("$admin_route/category", 'Kordy\Ticketit\Controllers\CategoriesController');

	//Settings configuration routes (ex. http://url/tickets-admin/configuration)
	resource("$admin_route/configuration", 'Kordy\Ticketit\Controllers\ConfigurationsController');

    //Administrators configuration routes (ex. http://url/tickets-admin/administrators)
    resource("$admin_route/administrator", 'Kordy\Ticketit\Controllers\AdministratorsController');

	//Tickets demo data route (ex. http://url/tickets-admin/demo-seeds/)
	// get("$admin_route/demo-seeds", 'Kordy\Ticketit\Controllers\InstallController@demoDataSeeder');
});
