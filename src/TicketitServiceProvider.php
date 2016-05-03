<?php

namespace Kordy\Ticketit;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Kordy\Ticketit\Facades\TicketitAdminFacade;
use Kordy\Ticketit\Facades\TicketitAgentFacade;
use Kordy\Ticketit\Facades\TicketitCategoryFacade;
use Kordy\Ticketit\Facades\TicketitCommentFacade;
use Kordy\Ticketit\Facades\TicketitPriorityFacade;
use Kordy\Ticketit\Facades\TicketitStatusFacade;
use Kordy\Ticketit\Facades\TicketitTicketFacade;
use Kordy\Ticketit\Facades\TicketitUserFacade;

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
        
        // Load routes if enable is true in Config/routes.php
        if (config('ticketit.routes.enable')) {
            if (! $this->app->routesAreCached()) {
                require __DIR__.'/routes.php';
            }
        }

        // Load views
        $this->loadViewsFrom(__DIR__.'/Resources/Views', 'ticketit');
        
        /** publish resources **/
        
        // Publish the configuration file to the application config folder
        $this->publishes([
            __DIR__.'/Config/' => config_path('ticketit'),
        ], 'config');

        // Publish the migrations files to the application database migrations folder
        $this->publishes([
            __DIR__.'/Migrations/' => database_path('migrations')
        ], 'migrations');

        // Publish the views files to the application resources/views/vendor folder
        $this->publishes([
            __DIR__.'/Resources/Views' => base_path('resources/views/vendor/ticketit')
        ], 'views');
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
        // Default routes configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/routes.php', 'ticketit.routes');
        // Default models configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/models.php', 'ticketit.models');
        // Default views configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/views.php', 'ticketit.views');
        // Register model bindings from the configured models paths in Config/models.php
        $this->registerModelBindings();
        // Register model Facades at Facades/
        $this->registerFacadesAliases();
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

    /**
     * Create aliases for the Model Bindings. 
     * 
     * @see registerModelBindings
     */
    protected function registerFacadesAliases()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('TicketitUser', TicketitUserFacade::class);
        $loader->alias('TicketitAgent', TicketitAgentFacade::class);
        $loader->alias('TicketitAdmin', TicketitAdminFacade::class);
        $loader->alias('TicketitStatus', TicketitStatusFacade::class);
        $loader->alias('TicketitPriority', TicketitPriorityFacade::class);
        $loader->alias('TicketitCategory', TicketitCategoryFacade::class);
        $loader->alias('TicketitTicket', TicketitTicketFacade::class);
        $loader->alias('TicketitComment', TicketitCommentFacade::class);
    }
}