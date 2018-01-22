<?php

namespace Kordy\Ticketit\Views\admin\priority\widgets;

use Kordy\Ticketit\Models\Priority;

class PriorityIndex
{
    public $template = 'ticketit::admin.priority.widgets.PriorityIndexTpl';

    public $cacheLifeTime = 60;

    public $cacheTags = ['priority'];

    public function data($admin_route)
    {
        return ['admin_route' => $admin_route, 'priorities' => Priority::all()];
    }
}