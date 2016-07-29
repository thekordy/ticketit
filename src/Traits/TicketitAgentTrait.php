<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait TicketitAgentTrait
{
    /**
     * Get all related categories this is member in.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(
            app('TicketitCategory'), 'ticketit_category_agent', 'agent_id', 'category_id'
        );
    }

    /**
     * Tickets assigned to this agent.
     *
     * @return HasMany
     */
    public function assignedTickets()
    {
        return $this->hasMany(app('TicketitTicket'), 'agent_id');
    }

    /**
     * Add agent flag to this.
     *
     * @return $this
     */
    public function addToAgents()
    {
        $this->ticketit_agent = 1;
        $this->save();

        return $this;
    }

    /**
     * Remove agent flag to this.
     *
     * @return $this
     */
    public function removeFromAgents()
    {
        $this->ticketit_agent = 0;
        $this->save();

        return $this;
    }

    /**
     * Check agent flag.
     *
     * @return boolean
     */
    public function isAgent()
    {
        return $this->ticketit_agent == 1;
    }

    /**
     * Add this to a category or to many categories.
     *
     * @param int|object|array $category
     */
    public function addToCategory($category)
    {
        $this->categories()->attach($category);
    }

    /**
     * Remove this from a category or many categories.
     *
     * @param int|object|array $category
     */
    public function removeFromCategory($category)
    {
        $this->categories()->detach($category);
    }
}
