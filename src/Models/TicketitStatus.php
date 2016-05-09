<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\TicketitStatusTrait;

class TicketitStatus extends Model
{
    use TicketitStatusTrait;

    protected $fillable = ['name', 'color'];
    protected $table = 'ticketit_statuses';
    public $timestamps = false;
}
