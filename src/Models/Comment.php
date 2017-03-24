<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\ContentEllipse;

class Comment extends Model
{
    use ContentEllipse;

    protected $table = 'ticketit_comments';

    /**
     * Get related ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('Kordy\Ticketit\Models\Ticket', 'ticket_id');
    }

    /**
     * Get comment owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
