<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\AuzoTools\Traits\ModelFieldsPolicy;
use Kordy\Ticketit\Traits\TicketitTicketTrait;

class TicketitTicket extends Model
{
    use TicketitTicketTrait, ModelFieldsPolicy;

    protected $fillable = [
        'subject',
        'content',
        'ticketable_id',
        'ticketable_type',
        'agent_id',
        'status_id',
        'priority_id',
        'category_id',
        'access_token',
        'notification_email',
    ];
    protected $hidden = ['access_token'];
    protected $table = 'ticketit_ticket';
    protected $dates = ['created_at', 'updated_at'];
}
