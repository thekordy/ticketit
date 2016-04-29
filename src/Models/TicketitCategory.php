<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Traits\TicketitCategoryTrait;

class TicketitCategory extends Model
{
    use TicketitCategoryTrait;

    protected $fillable = ['name', 'color'];
    protected $table = 'ticketit_categories';
    public $timestamps = false;
}