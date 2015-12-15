<?php
namespace Kordy\Ticketit\Controllers;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Controllers\TicketsController;

class DashboardController extends Controller {

    public function index($indicator_period = 2)
    {
        $tickets_total = Ticket::all();
        $tickets_count = $tickets_total->count();
        $open_tickets_count = $tickets_total->where('completed_at', null)->count();
        $closed_tickets_count = $tickets_count - $open_tickets_count;

        // Per Category pagination
        $categories = Category::with('tickets')->paginate(10,['*'],'cat_page');

        // Total tickets counter per category for google pie chart
        $categories_all = Category::with('tickets')->get();

        // Total tickets counter per agent for google pie chart
        $agents_all = Agent::agents()->with('agentTicketsTotal')->get();

        // Per Agent
        $agents = Agent::with('agentTicketsTotal')->agents(10);

        // Per User
        $users = Agent::with('userTicketsTotal')->users(10);

        // Per Category performance data
        $ticketController = new TicketsController(new Ticket, new Agent);
        $monthly_performance = $ticketController->monthlyPerfomance($indicator_period, $categories_all);

        return view(
            'ticketit::admin.index',
            compact(
                'tickets_total',
                'open_tickets_count',
                'closed_tickets_count',
                'tickets_count',
                'categories',
                'agents',
                'users',
                'monthly_performance',
                'categories_all',
                'agents_all'
            ));
    }

}
