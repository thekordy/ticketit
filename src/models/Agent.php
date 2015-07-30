<?php

namespace Kordy\Ticketit\Models;

use Auth;
use App\User;

class Agent extends User
{
    /**
     * Get related categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->belongsToMany('Kordy\Ticketit\Models\Category', 'ticketit_categories_users', 'user_id', 'category_id');
    }

}