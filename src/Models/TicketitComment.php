<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\TicketitCommentTrait;

class TicketitComment extends Model
{
    use TicketitCommentTrait;

    protected $fillable = ['content', 'ticket_id', 'commentable_id', 'commentable_type'];
    protected $table = 'ticketit_comments';
    protected $dates = ['created_at', 'updated_at'];
}
