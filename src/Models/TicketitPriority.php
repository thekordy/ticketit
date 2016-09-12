<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\AuzoTools\Traits\ModelFieldsPolicy;
use Kordy\Ticketit\Traits\TicketitPriorityTrait;

class TicketitPriority extends Model
{
    use TicketitPriorityTrait, ModelFieldsPolicy;

    protected $fillable = ['name', 'color'];
    protected $table = 'ticketit_priorities';
    public $timestamps = false;
}
