<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\TicketitTicketTrait;

class TicketitTicket extends Model
{
    use TicketitTicketTrait;

    protected $fillable = [
        'subject', 
        'content', 
        'ticketable_id', 
        'ticketable_type',
        'agent_id',
        'status_id', 
        'priority_id', 
        'category_id'
    ];
    protected $table = 'ticketit_ticket';
    protected $dates = ['created_at', 'updated_at'];
}