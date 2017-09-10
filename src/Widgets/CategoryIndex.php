<?php

namespace Kordy\Ticketit\Widgets;

use Kordy\Ticketit\Models\Category;

class CategoryIndex
{
    public $template = 'ticketit::admin.category.widgets.index_table';

    public $cacheLifeTime = 60;

    public $cacheTags = ['category'];

    public function data($admin_route)
    {
        return ['admin_route' => $admin_route, 'priorities' => Category::all()];
    }
}