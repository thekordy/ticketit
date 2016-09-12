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
     * Ticket user info.
     * more info: https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json.
     *
     * @return array|null
     */
    public function getUserInfoAttribute()
    {
        $user = \TicketitUser::find($this->ticketable_id);
        if ($user) {
            return [
                'name'  => $user->name,
                'email' => $user->email,
            ];
        }
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
     * Ticket agent info.
     * more info: https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json.
     *
     * @return array|null
     */
    public function getAgentInfoAttribute()
    {
        $agent = \TicketitAgent::find($this->agent_id);
        if ($agent) {
            return [
                'name' => $agent->name,
            ];
        }
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
     * Ticket status info.
     * more info: https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json.
     *
     * @return array|null
     */
    public function getStatusInfoAttribute()
    {
        $status = \TicketitStatus::find($this->status_id);
        if ($status) {
            return [
                'name'  => $status->name,
                'color' => $status->color,
            ];
        }
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
     * Ticket priority info.
     * more info: https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json.
     *
     * @return array|null
     */
    public function getPriorityInfoAttribute()
    {
        $priority = \TicketitPriority::find($this->priority_id);
        if ($priority) {
            return [
                'name'  => $priority->name,
                'color' => $priority->color,
            ];
        }
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
     * Ticket category info.
     * more info: https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json.
     *
     * @return array|null
     */
    public function getCategoryInfoAttribute()
    {
        $category = \TicketitCategory::find($this->category_id);
        if ($category) {
            return [
                'name'  => $category->name,
                'color' => $category->color,
            ];
        }
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
     * Get open tickets.
     *
     * @param $query
     */
    public function scopeOpen($query)
    {
        $query->whereNull('closed_at');
    }

    /**
     * Get closed tickets.
     *
     * @param $query
     */
    public function scopeClosed($query)
    {
        $query->whereNotNull('closed_at');
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
