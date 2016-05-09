<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait TicketitTicketTrait
{
    /**
     * Ticket owner.
     *
     * @return BelongsTo
     */
    public function ticketable()
    {
        return $this->morphTo();
    }

    /**
     * Ticket agent.
     *
     * @return BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(app('TicketitAgent'), 'agent_id');
    }

    /**
     * Ticket status.
     *
     * @return BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(app('TicketitStatus'), 'status_id');
    }

    /**
     * Ticket priority.
     *
     * @return BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo(app('TicketitPriority'), 'priority_id');
    }

    /**
     * Ticket category.
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(app('TicketitCategory'), 'category_id');
    }

    /**
     * Ticket comments.
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(app('TicketitComment'), 'ticket_id');
    }

    /**
     * Filter tickets by agent_id.
     *
     * @param $query
     * @param int $agent_id
     */
    public function scopeByAgent($query, $agent_id)
    {
        $query->whereAgentId($agent_id);
    }

    /**
     * Filter tickets by status_id.
     *
     * @param $query
     * @param int $status_id
     */
    public function scopeByStatus($query, $status_id)
    {
        $query->whereStatusId($status_id);
    }

    /**
     * Filter tickets by priority_id.
     *
     * @param $query
     * @param int $priority_id
     */
    public function scopeByPriority($query, $priority_id)
    {
        $query->wherePriorityId($priority_id);
    }

    /**
     * Filter tickets by category_id.
     *
     * @param $query
     * @param int $category_id
     */
    public function scopeByCategory($query, $category_id)
    {
        $query->whereCategoryId($category_id);
    }
}
