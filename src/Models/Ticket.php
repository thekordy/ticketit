<?php

namespace Kordy\Ticketit\Models;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $table = 'ticketit';
    protected $dates = ['completed_at'];

    /**
     * List of completed tickets.
     *
     * @return bool
     */
    public function hasComments()
    {
        return (bool) count($this->comments);
    }

    public function isComplete()
    {
        return (bool) $this->completed_at;
    }

    /**
     * List of completed tickets.
     *
     * @return Collection
     */
    public function scopeComplete($query)
    {
        return $query->whereNotNull('completed_at');
    }

    /**
     * List of active tickets.
     *
     * @return Collection
     */
    public function scopeActive($query)
    {
        return $query->whereNull('completed_at');
    }

    /**
     * Get Ticket status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
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
        return $this->belongsTo('Kordy\Ticketit\Models\Agent', 'agent_id');
    }

    /**
     * Get Ticket comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Comment', 'ticket_id');
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

    /**
     * @see Illuminate/Database/Eloquent/Model::asDateTime
     */
    public function freshTimestamp()
    {
        return new Date();
    }

    /**
     * @see Illuminate/Database/Eloquent/Model::asDateTime
     */
    protected function asDateTime($value)
    {
        if (is_numeric($value))
        {
            return Date::createFromTimestamp($value);

        }
        elseif (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $value))
        {

            return Date::createFromFormat('Y-m-d', $value)->startOfDay();

        }
        elseif (! $value instanceof DateTime)
        {
            $format = $this->getDateFormat();

            return Date::createFromFormat($format, $value);
        }

        return Date::instance($value);
    }


    /**
     * Get all user tickets
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeUserTickets($query, $id)
    {
        return $query->where('user_id', $id);
    }

    /**
     * Get all agent tickets
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeAgentTickets($query, $id)
    {
        return $query->where('agent_id', $id);
    }
    /**
     * Get all agent tickets
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeAgentUserTickets($query, $id)
    {
        return $query->where(function($subquery) use ($id) {
            $subquery->where('agent_id', $id)->orWhere('user_id', $id);
        });
    }

    /**
     * Removes all html from content
     *
     * @param $raw
     */
    public function setContentAttribute($raw){
        $this->attributes['content'] = "bla";
        $this->html = $raw;
    }

    /**
     * Makes html safe
     *
     * @param $raw
     */
    public function setHtmlAttribute($raw){
        $this->attributes['html'] = "escaped";
    }
}
