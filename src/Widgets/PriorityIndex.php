<?php

class PriorityIndex
{
    public $template = 'ticketit::admin.priority.widgets.index_table';
    public $cacheLifeTime = 60;
    public $cacheTags = ['priority', 'admin_route'];

    public function data($admin_route)
    {
        return ['admin_route' => $admin_route, 'priorities' => Priority::all()];
    }


}