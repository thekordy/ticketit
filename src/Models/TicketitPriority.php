<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\TicketitPriorityTrait;

class TicketitPriority extends Model
{
    use TicketitPriorityTrait;

    protected $fillable = ['name', 'color'];
    protected $table = 'ticketit_priorities';
    public $timestamps = false;
}
