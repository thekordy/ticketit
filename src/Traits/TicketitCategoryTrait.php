<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait TicketitCategoryTrait
{
    /**
     * Get all agents belong to this category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMan
     */
    public function agents()
    {
        return $this->belongsToMany(
            app('TicketitAgent'), 'ticketit_category_agent', 'category_id', 'agent_id'
        );
    }

    /**
     * Get tickets belongs to this category.
     *
     * @return HasMany
     */
    public function tickets()
    {
        return $this->hasMany(app('TicketitTicket'), 'category_id');
    }

    /**
     * Add an agent or more to this category.
     *
     * @param int|object|array $agent
     */
    public function addAgent($agent)
    {
        $this->agents()->attach($agent);
    }

    /**
     * remove an agent or more from this category.
     *
     * @param int|object|array $agent
     */
    public function removeAgent($agent)
    {
        $this->agents()->detach($agent);
    }
}
