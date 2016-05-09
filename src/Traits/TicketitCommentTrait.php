<?php

namespace Kordy\Ticketit\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait TicketitCommentTrait
{
    /**
     * Ticket this comment belongs to.
     *
     * @return BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo(app('TicketitTicket'), 'ticket_id');
    }

    /**
     * The owner of this comment.
     *
     * @return MorphTo
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
