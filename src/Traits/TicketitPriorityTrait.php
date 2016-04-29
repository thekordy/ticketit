<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait TicketitPriorityTrait
{
    /**
     * Get tickets of this priority
     * 
     * @return HasMany
     */
    public function tickets()
    {
        return $this->hasMany(app('TicketitTicket'), 'priority_id');
    }
}