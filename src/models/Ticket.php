<?php

namespace Kordy\Ticketit\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    protected $table = 'ticketit';

    /**
     * Get Ticket status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status() {
        return $this->belongsTo('Kordy\Ticketit\Models\Status', 'status_id');
    }


    /**
     * Get Ticket priority
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo('Kordy\Ticketit\Models\Priority', 'priority_id');
    }

    /**
     * Get Ticket category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('Kordy\Ticketit\Models\Category', 'category_id');
    }

    /**
     * Get Ticket owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get Ticket agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo('App\Agent', 'agent_id');
    }

//    /**
//     * Get Ticket audits
//     *
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function audits()
//    {
//        return $this->hasMany('Kordy\Ticketit\Models\Audit', 'ticket_id');
//    }
//
//
//    /**
//     * Get Ticket comments
//     *
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function comments()
//    {
//        return $this->hasMany('Kordy\Ticketit\Models\Comment', 'ticket_id');
//    }
}
