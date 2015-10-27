<?php
namespace Kordy\Ticketit\Controllers;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Controllers\TicketsController;

class AdminController extends Controller {

    public function index($indicator_period = 2)
    {
        $tickets_count = Ticket::count();
        $open_tickets_count = Ticket::whereNull('completed_at')->count();
        $closed_tickets_count = Ticket::whereNotNull('completed_at')->count();

        // Per Category pagination
        $categories = Category::paginate(10,['*'],'cat_page');

        // Total tickets counter per category for google pie chart
        $categories_all = Category::all();
        $categories_share = [];
        foreach ($categories_all as $cat) {
            $categories_share[$cat->name] = $cat->tickets()->count();
        }

        // Total tickets counter per agent for google pie chart
        $agents_all = Agent::agents();
        $agents_share = [];
        foreach ($agents_all as $agent_single) {
            $agents_share[$agent_single->name] = $agent_single->agentTickets(false)->count() + $agent_single->agentTickets(true)->count();
        }

        // Per Agent
        $agents = Agent::agents(10);

        // Per User
        $users = Agent::users(10);

        // Per Category performance data 
        $ticketController = new TicketsController(new Ticket, new Agent);
        $monthly_performance = $ticketController->monthlyPerfomance($indicator_period);

        return view(
            'ticketit::admin.index',
            compact(
                'open_tickets_count',
                'closed_tickets_count',
                'tickets_count',
                'categories',
                'agents',
                'users',
                'monthly_performance',
                'categories_share',
                'agents_share'
            ));
    }

}
