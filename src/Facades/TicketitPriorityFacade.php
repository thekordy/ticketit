<?php

namespace Kordy\Ticketit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kordy\Ticketit\Models\TicketitPriority
 */
class TicketitPriorityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TicketitPriority';
    }
}
