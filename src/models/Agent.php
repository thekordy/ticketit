<?php

namespace Kordy\Ticketit\Models;

use Auth;
use App\User;

class Agent extends User
{

    /**
     * list of all agents and returning collection
     * @param integer $cat_id
     * @return bool
     */
    public function scopeAgents($query, $cat_id = null)
    {
        if ($cat_id == null)
            return $query->where('ticketit_agent', '1')->get();

        return Category::find($cat_id)->agents;
    }

    /**
     * list of all agents and returning lists array of id and name
     * @param integer $cat_id
     * @return bool
     */
    public function scopeAgentsLists($query, $cat_id = null)
    {
        if ($cat_id == null)
            return $query->where('ticketit_agent', '1')->lists('name', 'id')->toArray();

        return Category::find($cat_id)->agents->lists('name', 'id')->toArray();
    }

    /**
     * Check if user is agent
     * @return boolean
     */
    public static function isAgent()
    {
        if (Auth::check()) {
            if (\Auth::user()->ticketit_agent) return true;
        }
    }

    /**
     * Check if user is admin
     * @return boolean
     */
    public static function isAdmin()
    {
        if (Auth::check()) {
            if (in_array(\Auth::user()->id, config('ticketit.admin_ids'))) return true;
        }
    }
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