<?php

namespace Kordy\Ticketit\Models;

use Auth;
use App\User;

class Agent extends User
{
    /**
     * Get related categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->belongsToMany('Kordy\Ticketit\Models\Category', 'ticketit_categories_users', 'user_id', 'category_id');
    }

    /**
     * Get related agent tickets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agentTickets()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'agent_id');
    }

    public function ticketsCount()
    {
        return $this->hasOne('Kordy\Ticketit\Models\Ticket')
            ->selectRaw('agent_id, count(*) as aggregate')
            ->groupBy('agent_id');
    }

    public function getTicketsCountAttribute()
    {
        // if relation is not loaded already, let's do it first
        if ($this->relationLoaded('ticketsCount')) $this->load('ticketsCount');

        $related = $this->getRelation('ticketsCount');

        // then return the count directly
        return ($related) ? (int) $related->aggregate : 0;
    }

    /**
     * Get related user tickets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userTickets()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id');
    }

}