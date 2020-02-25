<?php

namespace Kordy\Ticketit;

use Illuminate\Support\ServiceProvider;

class TicketitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    // Default core configuration file
	    $this->mergeConfigFrom(__DIR__.'/Config/core.php', 'ticketit');

	    $this->app->bind(
		    'Kordy\Ticketit\Contracts\Entities\TicketInterface',
		    config('ticketit.models.ticket')
	    );
	    $this->app->bind(
		    'Kordy\Ticketit\Contracts\Entities\AgentInterface',
		    config('ticketit.models.agent')
	    );
	    $this->app->bind(
		    'Kordy\Ticketit\Contracts\Repositories\TicketRepositoryInterface',
		    config('ticketit.repositories.ticket')
	    );
	    $this->app->bind(
		    'Kordy\Ticketit\Contracts\Repositories\AgentRepositoryInterface',
		    config('ticketit.repositories.agent')
	    );
	    $this->app->bind(
		    'Kordy\Ticketit\Contracts\Services\TicketOperationsInterface',
		    config('ticketit.services.ticket_operations')
	    );
    }
}
