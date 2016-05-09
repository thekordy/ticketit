<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait TicketitStatusTrait
{
    /**
     * Get tickets of this status.
     *
     * @return HasMany
     */
    public function tickets()
    {
        return $this->hasMany(app('TicketitTicket'), 'status_id');
    }
}
