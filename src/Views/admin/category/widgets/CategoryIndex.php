<?php

namespace Kordy\Ticketit\Views\admin\category\widgets;

use Kordy\Ticketit\Models\Category;

class CategoryIndex
{
    public $template = 'ticketit::admin.category.widgets.CategoryIndexTpl';

    public $cacheLifeTime = 60;

    public $cacheTags = ['category'];

    public function data($admin_route)
    {
        return ['admin_route' => $admin_route, 'categories' => Category::all()];
    }
}