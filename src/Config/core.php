<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Services path
	|--------------------------------------------------------------------------
	|
	| All services are reloaded from the paths configured here, if you want
	| to customize a service, implement the service interface (see src/Contracts/Services),
	| and replace the model path here
	|
	*/
	'services' => [
		'ticket_operations' => \Kordy\Ticketit\Services\TicketOperationsService::class,
	],

	/*
	|--------------------------------------------------------------------------
	| Repositories path
	|--------------------------------------------------------------------------
	|
	| All repositories are reloaded from the paths configured here, if you want
	| to customize a repository, implement the repository interface (see src/Contracts/Repositories),
	| and replace the repository path here
	|
	*/
	'repositories' => [
		'ticket' => \Kordy\Ticketit\Repositories\TicketRepository::class,
		'agent' => \Kordy\Ticketit\Repositories\AgentRepository::class,
	],

	/*
	|--------------------------------------------------------------------------
	| Models path
	|--------------------------------------------------------------------------
	|
	| All models are reloaded from the paths configured here, if you want
	| to customize a model, implement the model interface (see src/Contracts/Entities),
	| and replace the model path here
	|
	*/
	'models' => [
		'ticket' => \Kordy\Ticketit\Models\Ticket::class,
		'agent' => \Kordy\Ticketit\Models\Agent::class,
	],

	/*
	|--------------------------------------------------------------------------
	| DB tables
	|--------------------------------------------------------------------------
	|
	| All db tables names are configured here, if you want
	| to use another table name, change the name here
	|
	*/
	'db' => [
		'tickets' => 'ticketit',
		'agents' => 'users',
		'categories_agents' => 'ticketit_categories_users',
	]
];