<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\AuzoTools\Traits\ModelFieldsPolicy;
use Kordy\Ticketit\Traits\TicketitCategoryTrait;

class TicketitCategory extends Model
{
    use TicketitCategoryTrait, ModelFieldsPolicy;

    protected $fillable = ['name', 'color', 'admin_id', 'auto_assign'];
    protected $table = 'ticketit_categories';
    public $timestamps = false;
}
