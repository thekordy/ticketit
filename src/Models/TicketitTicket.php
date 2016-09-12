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
    protected $dates = ['created_at', 'updated_at', 'closed_at'];

    // see https://laravel.com/docs/5.1/eloquent-serialization#appending-values-to-json
    protected $appends = [
        'status_info',
        'priority_info',
        'category_info',
        'agent_info',
        'user_info',
    ];
}
