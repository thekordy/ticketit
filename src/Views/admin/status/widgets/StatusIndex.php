<?php

namespace Kordy\Ticketit\Views\admin\status\widgets;

use Kordy\Ticketit\Models\Status;

class StatusIndex
{
    public $template = 'ticketit::admin.status.widgets.StatusIndexTpl';

    public $cacheLifeTime = 60;

    public $cacheTags = ['status'];

    public function data($admin_route)
    {
        return ['admin_route' => $admin_route, 'statuses' => Status::all()];
    }
}