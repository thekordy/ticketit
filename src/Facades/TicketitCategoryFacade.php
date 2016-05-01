<?php

namespace Kordy\Ticketit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kordy\Ticketit\Models\TicketitCategory
 */
class TicketitCategoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TicketitCategory';
    }
}
