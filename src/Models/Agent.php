<?php

namespace Kordy\Ticketit\Models;

use App\User;
use Auth;

class Agent extends User
{
    protected $table = 'users';

    /**
     * list of all agents and returning collection.
     *
     * @param $query
     * @param bool $paginate
     *
     * @return bool
     *
     * @internal param int $cat_id
     */
    public function scopeAgents($query, $paginate = false)
    {
        if ($paginate) {
            return $query->where('ticketit_agent', '1')->paginate($paginate, ['*'], 'agents_page');
        } else {
            return $query->where('ticketit_agent', '1');
        }
    }

    /**
     * list of all admins and returning collection.
     *
     * @param $query
     * @param bool $paginate
     *
     * @return bool
     *
     * @internal param int $cat_id
     */
    public function scopeAdmins($query, $paginate = false)
    {
        if ($paginate) {
            return $query->where('ticketit_admin', '1')->paginate($paginate, ['*'], 'admins_page');
        } else {
            return $query->where('ticketit_admin', '1')->get();
        }
    }

    /**
     * list of all agents and returning collection.
     *
     * @param $query
     * @param bool $paginate
     *
     * @return bool
     *
     * @internal param int $cat_id
     */
    public function scopeUsers($query, $paginate = false)
    {
        if ($paginate) {
            return $query->where('ticketit_agent', '0')->paginate($paginate, ['*'], 'users_page');
        } else {
            return $query->where('ticketit_agent', '0')->get();
        }
    }

    /**
     * list of all agents and returning lists array of id and name.
     *
     * @param $query
     *
     * @return bool
     *
     * @internal param int $cat_id
     */
    public function scopeAgentsLists($query)
    {
        return $query->where('ticketit_agent', '1')->lists('name', 'id')->toArray();
    }

    /**
     * Check if user is agent.
     *
     * @return bool
     */
    public static function isAgent($id = null)
    {
        if (isset($id)) {
            $user = User::find($id);
            if ($user->ticketit_agent) {
                return true;
            }

            return false;
        }
        if (auth()->check()) {
            if (auth()->user()->ticketit_agent) {
                return true;
            }
        }
    }

    /**
     * Check if user is admin.
     *
     * @return bool
     */
    public static function isAdmin()
    {
        if (auth()->check()) {
            if (auth()->user()->ticketit_admin) {
                return true;
            } elseif (!is_null(Setting::where('slug', 'admin_ids')->first()) && in_array(auth()->user()->id, Setting::grab('admin_ids'))) {
                return true;
            }
        }
    }

    /**
     * Check if user is the assigned agent for a ticket.
     *
     * @param int $id ticket id
     *
     * @return bool
     */
    public static function isAssignedAgent($id)
    {
        if (auth()->check() && Auth::user()->ticketit_agent) {
            if (Auth::user()->id == Ticket::find($id)->agent->id) {
                return true;
            }
        }
    }

    /**
     * Check if user is the owner for a ticket.
     *
     * @param int $id ticket id
     *
     * @return bool
     */
    public static function isTicketOwner($id)
    {
        if (auth()->check()) {
            if (auth()->user()->id == Ticket::find($id)->user->id) {
                return true;
            }
        }
    }

    /**
     * Get related categories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->belongsToMany('Kordy\Ticketit\Models\Category', 'ticketit_categories_users', 'user_id', 'category_id');
    }

    /**
     * Get related agent tickets (To be deprecated).
     */
    public function agentTickets($complete = false)
    {
        if ($complete) {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'agent_id')->whereNotNull('completed_at');
        } else {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'agent_id')->whereNull('completed_at');
        }
    }

    /**
     * Get related user tickets (To be deprecated).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userTickets($complete = false)
    {
        if ($complete) {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id')->whereNotNull('completed_at');
        } else {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id')->whereNull('completed_at');
        }
    }

    public function tickets($complete = false)
    {
        if ($complete) {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id')->whereNotNull('completed_at');
        } else {
            return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id')->whereNull('completed_at');
        }
    }

    public function allTickets($complete = false) // (To be deprecated)
    {
        if ($complete) {
            return Ticket::whereNotNull('completed_at');
        } else {
            return Ticket::whereNull('completed_at');
        }
    }

    public function getTickets($complete = false) // (To be deprecated)
    {
        $user = self::find(auth()->user()->id);

        if ($user->isAdmin()) {
            $tickets = $user->allTickets($complete);
        } elseif ($user->isAgent()) {
            $tickets = $user->agentTickets($complete);
        } else {
            $tickets = $user->userTickets($complete);
        }

        return $tickets;
    }
}
