<?php
namespace Kordy\Ticketit\Controllers;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Ticket;

class AdminController extends Controller {

    public function index($indicator_period = 2)
    {
        $tickets_count = Ticket::count();
        $open_tickets_count = Ticket::whereNull('completed_at')->count();
        $closed_tickets_count = Ticket::whereNotNull('completed_at')->count();

        // Per Category
        $categories = Category::all();
        $categories_count = [];
        foreach ($categories as $category) {
            $categories_count[$category->name]['total'] = $category->tickets()->count();
            $categories_count[$category->name]['open'] = $category->tickets()->whereNull('completed_at')->count();
            $categories_count[$category->name]['closed'] = $category->tickets()->whereNotNull('completed_at')->count();
            $categories_count[$category->name]['color'] = $category->color;
        }

        // Per Agent
        $agents = Agent::agents();
        $agents_count = [];
        foreach ($agents as $agent) {
            $agents_count[$agent->name]['open'] = $agent->agentTickets(false)->count();
            $agents_count[$agent->name]['closed'] = $agent->agentTickets(true)->count();
            $agents_count[$agent->name]['total'] = $agents_count[$agent->name]['open'] + $agents_count[$agent->name]['closed'];
        }

        // Per User
        $users = Agent::users();
        $users_count = [];
        foreach ($users as $user) {
            if ($user->userTickets(false)->count() != 0 || $user->userTickets(true)->count() != 0) {
                $users_count[$user->name]['open'] = $user->userTickets(false)->count();
                $users_count[$user->name]['closed'] = $user->userTickets(true)->count();
                $users_count[$user->name]['total'] = $users_count[$user->name]['open'] + $users_count[$user->name]['closed'];
            }
        }

        // Per Category performance
        $monthly_performance = $this->monthlyPerfomance($indicator_period);

        return view(
            'ticketit::admin.index',
            compact(
                'open_tickets_count',
                'closed_tickets_count',
                'tickets_count',
                'categories_count',
                'agents_count',
                'users_count',
                'monthly_performance'
            ));
    }

    /**
     * Calculate average closing period of days per category for number of months
     * @param int $period
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function monthlyPerfomance($period = 2)
    {
        $categories = Category::all();
        $tools = new ToolsController();
        $intervals[0][] = '"Month"';
        foreach ($categories as $cat) {
            $intervals[0][] = '"'.$cat->name.'"';
        }

        for ($m = $period; $m >= 0; $m--) {
            $from = Carbon::now()->subMonth($m);
            $from->day = 1;
            $to = Carbon::now()->subMonth($m)->endOfMonth();
            $intervals[$m+1][] = '"'.$from->format('F Y').'"';
            foreach ($categories as $cat) {
                $intervals[$m+1][] = round($tools->intervalPerformance($from, $to, $cat->id), 1);
            }
        }
        return $intervals;
    }

}