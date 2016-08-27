<?php

namespace Kordy\Ticketit;

use AuzoToolsPermissionRegistrar;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Kordy\Ticketit\Facades\TicketitAdminFacade;
use Kordy\Ticketit\Facades\TicketitAgentFacade;
use Kordy\Ticketit\Facades\TicketitCategoryFacade;
use Kordy\Ticketit\Facades\TicketitCommentFacade;
use Kordy\Ticketit\Facades\TicketitHelpersFacade;
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
        // Register morph map as configured in config/ticketit/models.php
        Relation::morphMap(config('ticketit.models.morphmap'));

        // Load ACL permissions
        if (config('ticketit.core.acl_handler') == 'auzo-tools') {
            $abilities_policies = config('ticketit.acl');
            AuzoToolsPermissionRegistrar::registerPermissions($abilities_policies);
        }

        // Load routes if enabled in config/ticketit/core.php
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        /* publish resources **/

        // Publish the configuration file to the application config folder
        $this->publishes([
            __DIR__.'/Config/' => config_path('ticketit'),
        ], 'config');

        // Publish the migrations files to the application database migrations folder
        $this->publishes([
            __DIR__.'/Migrations/' => database_path('migrations'),
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
        // Default routes configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/routes.php', 'ticketit.routes');
        // Default models configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/models.php', 'ticketit.models');
        // Default ACL configuration file
        $this->mergeConfigFrom(__DIR__.'/Config/acl.php', 'ticketit.acl');
        // Register model bindings from the configured models paths in config/ticketit/models.php
        $this->registerModelBindings();
        // Register model Facades at Facades/
        $this->registerFacadesAliases();

        // Default requests validation configuration file. This must be loaded here after registerModelBindings
        $this->mergeConfigFrom(__DIR__.'/Config/validation.php', 'ticketit.validation');
        // Default ticket configuration file. This must be loaded here after registerModelBindings
        $this->mergeConfigFrom(__DIR__.'/Config/ticket.php', 'ticketit.ticket');
    }

    /**
     * Bind the Permission and Role model into the IoC.
     */
    protected function registerModelBindings()
    {
        // Whenever call app('TicketitUser') load the model configured 'models[user]' in config/ticketit/models.php
        $this->app->bind('TicketitUser', config('ticketit.models.user'));

        // Whenever call app('TicketitAgent') load the model configured 'agent' in config/ticketit/models.php
        $this->app->bind('TicketitAgent', config('ticketit.models.agent'));

        // Whenever call app('TicketitAdmin') load the model configured 'admin' in config/ticketit/models.php
        $this->app->bind('TicketitAdmin', config('ticketit.models.admin'));

        // Whenever call app('TicketitStatus') load the model configured 'status' in config/ticketit/models.php
        $this->app->bind('TicketitStatus', config('ticketit.models.status'));

        // Whenever call app('TicketitPriority') load the model configured 'priority' in config/ticketit/models.php
        $this->app->bind('TicketitPriority', config('ticketit.models.priority'));

        // Whenever call app('TicketitCategory') load the model configured 'category' in config/ticketit/models.php
        $this->app->bind('TicketitCategory', config('ticketit.models.category'));

        // Whenever call app('Ticketit') load the model configured 'ticketit' in config/ticketit/models.php
        $this->app->bind('TicketitTicket', config('ticketit.models.ticket'));

        // Whenever call app('TicketitComment') load the model configured 'comment' in config/ticketit/models.php
        $this->app->bind('TicketitComment', config('ticketit.models.comment'));

        // Whenever call app('TicketitHelpers') load the class configured 'helpers' in config/ticketit/core.php
        $this->app->bind('TicketitHelpers', config('ticketit.core.helpers'));
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
        $loader->alias('TicketitHelpers', TicketitHelpersFacade::class);
    }
}
