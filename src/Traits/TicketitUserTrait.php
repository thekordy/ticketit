<?php

namespace Kordy\Ticketit\Traits;


use Illuminate\Database\Eloquent\Relations\MorphMany;

trait TicketitUserTrait
{

    /**
     * Comments by this user
     *
     * @return MorphMany
     */
    public function ticketComments()
    {
        return $this->morphMany(app('TicketitComment'), 'commentable');
    }

    /**
     * Tickets opened by this user
     *
     * @return MorphMany
     */
    public function ownTickets()
    {
        return $this->morphMany(app('TicketitTicket'), 'ticketable');
    }
}