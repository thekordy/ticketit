<?php

namespace Kordy\Ticketit\Services;

use Illuminate\Foundation\AliasLoader;
use Kordy\Ticketit\Facades\TicketitAdminFacade;
use Kordy\Ticketit\Facades\TicketitAgentFacade;
use Kordy\Ticketit\Facades\TicketitCategoryFacade;
use Kordy\Ticketit\Facades\TicketitCommentFacade;
use Kordy\Ticketit\Facades\TicketitPriorityFacade;
use Kordy\Ticketit\Facades\TicketitStatusFacade;
use Kordy\Ticketit\Facades\TicketitTicketFacade;
use Kordy\Ticketit\Facades\TicketitUserFacade;

class FacadesRegistrar
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Bind the Permission and Role model into the IoC.
     */
    public function registerModelBindings()
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
    public function registerFacadesAliases()
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