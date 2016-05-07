<?php

namespace Kordy\Ticketit;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Kordy\Ticketit\Services\AbilitiesRegistrar;
use Kordy\Ticketit\Services\FacadesRegistrar;

class TicketitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param GateContract $gate
     * @param AbilitiesRegistrar $abilities_registrar
     * @param Router $router
     */
    public function boot(GateContract $gate, AbilitiesRegistrar $abilities_registrar, Router $router)
    {
        // Load abilities and permissions
        $abilities_registrar->ticketitAbilities($gate);
        
        // Load authorize middleware
        $router->middleware('ticketit.authorize', config('ticketit.acl.middleware'));

        // Register morph map as configured in Config/models.php
        Relation::morphMap(config('ticketit.models.morphmap'));
        
        // Load routes if enable is true in Config/routes.php
        if (config('ticketit.routes.enable')) {
            if (! $this->app->routesAreCached()) {
                require __DIR__.'/routes.php';
            }
        }

        // Load views
        $this->loadViewsFrom(__DIR__.'/Views', 'ticketit');
        
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
            __DIR__.'/Views' => base_path('resources/views/vendor/ticketit')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $facades_registrar = new FacadesRegistrar($this->app);
        
        // Default core configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/core.php', 'ticketit.core');
        
        // Default routes configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/routes.php', 'ticketit.routes');
        
        // Default models configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/models.php', 'ticketit.models');
        
        // Default views configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/views.php', 'ticketit.views');
        
        // Default ACL configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/acl.php', 'ticketit.acl');
        
        // Register model bindings from the configured models paths in Config/models.php
        $facades_registrar->registerModelBindings();
        
        // Register model Facades at Facades/
        $facades_registrar->registerFacadesAliases();
    }
    
}