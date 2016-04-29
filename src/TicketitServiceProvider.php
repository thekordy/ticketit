<?php

namespace Kordy\Ticketit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class TicketitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register morph map as configured in Config/models.php
        Relation::morphMap(config('ticketit.models.morphmap'));

        // Load routes
//        if (! $this->app->routesAreCached()) {
//            require config('ticketit.routes.file');
//        }
        
        /** publish resources **/
        
        // Publish the configuration file to the application config folder
        $this->publishes([
            __DIR__.'/Config/' => config_path('ticketit'),
        ], 'config');

        // Publish the migrations files to the application database migrations folder
        $this->publishes([
            __DIR__.'/Migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Default core configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/core.php', 'ticketit.core');
        // Default models configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/models.php', 'ticketit.models');
        
        $this->registerModelBindings();
    }
    /**
     * Bind the Permission and Role model into the IoC.
     */
    protected function registerModelBindings()
    {
        // Whenever call app('TicketitUser') load the model configured 'models[user]' in Config/models.php
        $this->app->bind('TicketitUser', config('ticketit.models.user'));
        
        // Whenever call app('TicketitAgent') load the model configured 'agent' in Config/models.php
        $this->app->bind('TicketitAgent', config('ticketit.models.agent'));
        
        // Whenever call app('TicketitAdmin') load the model configured 'admin' in Config/models.php
        $this->app->bind('TicketitAdmin', config('ticketit.models.admin'));

        // Whenever call app('TicketitStatus') load the model configured 'status' in Config/models.php
        $this->app->bind('TicketitStatus', config('ticketit.models.status'));

        // Whenever call app('TicketitPriority') load the model configured 'priority' in Config/models.php
        $this->app->bind('TicketitPriority', config('ticketit.models.priority'));

        // Whenever call app('TicketitCategory') load the model configured 'category' in Config/models.php
        $this->app->bind('TicketitCategory', config('ticketit.models.category'));

        // Whenever call app('Ticketit') load the model configured 'ticketit' in Config/models.php
        $this->app->bind('TicketitTicket', config('ticketit.models.ticket'));

        // Whenever call app('TicketitComment') load the model configured 'comment' in Config/models.php
        $this->app->bind('TicketitComment', config('ticketit.models.comment'));
    }
}