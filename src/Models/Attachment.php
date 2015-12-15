<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {

    protected $table = 'ticketit_attachments';

    /**
     * Get related ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment() {
        return $this->belongsTo('Kordy\Ticketit\Models\Comment', 'comment_id');
    }
    /**
     * Get related attachment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket() {
        return $this->belongsto('Kordy\Ticketit\Models\Ticket', 'ticket_id');
    }

    /**
     * Get comment owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
