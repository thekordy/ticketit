<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email'];

    /**
     * Indicates that this model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get related tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'user_id');
    }

    /**
     * Get related agents.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents()
    {
        return $this->belongsToMany('\Kordy\Ticketit\Models\Agent', 'ticketit_categories_users', 'category_id', 'user_id');
    }
}
