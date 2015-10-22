<?php
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Seeds\TicketitTableSeeder;

class AdminController extends Controller {

    public function index()
    {
        $tickets_count = Ticket::count();
        $open_tickets_count = Ticket::whereNull('completed_at')->count();
        $closed_tickets_count = Ticket::whereNotNull('completed_at')->count();

        // Per Category
        $categories = Category::all();
        $categories_count = [];
        foreach ($categories as $category) {
            $categories_count[$category->name]['open'] = $category->tickets()->whereNull('completed_at')->count();
            $categories_count[$category->name]['closed'] = $category->tickets()->whereNotNull('completed_at')->count();
            $categories_count[$category->name]['color'] = $category->color;
        }

        return view(
            'ticketit::admin.index',
            compact(
                'open_tickets_count',
                'closed_tickets_count',
                'tickets_count',
                'categories_count'
            ));
    }

}