<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Requests\PrepareTicketRequest;

class TicketsController extends Controller
{

    protected $tickets;
    protected $agent;

    public function __construct(Ticket $tickets, Agent $agent)
    {
        $this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => ['show']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAgentMiddleware', ['only' => ['edit', 'update', 'complete']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['destroy']]);

        $this->tickets = $tickets;
        $this->agent = $agent;
    }

    /**
     * Display a listing of active tickets related to user.
     *
     * @return Response
     */
    public function index()
    {
        $items = config('ticketit.paginate_items');
        if ($this->agent->isAdmin()) {
            $tickets = $this->tickets->active()->orderBy('updated_at', 'desc')->paginate($items);
        } elseif ($this->agent->isAgent()) {
            $agent = $this->agent->find(auth()->user()->id);
            $tickets = $agent->agentTickets()->orderBy('updated_at', 'desc')->paginate($items);
        } else {
            $user = $this->agent->find(auth()->user()->id);
            $tickets = $user->userTickets()->orderBy('updated_at', 'desc')->paginate($items);
        }
        return view('ticketit::index', compact('tickets'));
    }

    /**
     * Display a listing of completed tickets related to user.
     *
     * @return Response
     */
    public function indexComplete()
    {
        $items = config('ticketit.paginate_items');
        if ($this->agent->isAdmin()) {
            $tickets = $this->tickets->complete()->orderBy('updated_at', 'desc')->paginate($items);
        } elseif ($this->agent->isAgent()) {
            $agent = $this->agent->find(auth()->user()->id);
            $tickets = $agent->agentTickets(true)->orderBy('updated_at', 'desc')->paginate($items);
        } else {
            $user = $this->agent->find(auth()->user()->id);
            $tickets = $user->userTickets(true)->orderBy('updated_at', 'desc')->paginate($items);
        }
        return view('ticketit::index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $priorities = Models\Priority::lists('name', 'id');
        $categories = Models\Category::lists('name', 'id');
        return view('ticketit::tickets.create', compact('priorities', 'categories'));
    }

    /**
     * Store a newly created ticket and auto assign an agent for it
     *
     * @param  Request  $request
     * @return Response redirect to index
     */
    public function store(PrepareTicketRequest $request)
    {
        $ticket = new Ticket;

        $ticket->subject = $request->subject;
        $ticket->content = $request->content;
        $ticket->priority_id = $request->priority_id;
        $ticket->category_id = $request->category_id;

        $ticket->status_id = config('ticketit.default_status_id');
        $ticket->user_id = auth()->user()->id;
        $ticket->agent_id = $this->autoSelectAgent($request->input('category_id'));

        $ticket->save();

        session()->flash('status', "The ticket has been created!");

        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $ticket = $this->tickets->find($id);

        $status_lists = Models\Status::lists('name', 'id');
        $priority_lists = Models\Priority::lists('name', 'id');
        $category_lists = Models\Category::lists('name', 'id');

        $agent_lists = ['auto' => 'Auto Select'] + $this->agent->agentsLists($ticket->category_id);
        $comments = $ticket->comments()->paginate(config('ticketit.paginate_items'));
        return view('ticketit::tickets.show',
            compact('ticket', 'status_lists', 'priority_lists', 'category_lists', 'agent_lists', 'comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PrepareTicketRequest $request, $id)
    {
        $ticket = $this->tickets->findOrFail($id);

        $ticket->subject = $request->subject;
        $ticket->content = $request->content;
        $ticket->status_id = $request->status_id;
        $ticket->category_id = $request->category_id;
        $ticket->priority_id = $request->priority_id;

        if ($request->input('agent_id') == 'auto') {
            $ticket->agent_id = $this->autoSelectAgent($request->input('category_id'));
        } else {
            $ticket->agent_id = $request->input('agent_id');
        }

        $ticket->save();

        session()->flash('status', "Ticket has been modified!");

        return redirect()->route(config('ticketit.main_route') . '.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $ticket = $this->tickets->findOrFail($id);
        $subject = $ticket->subject;
        $ticket->delete();

        session()->flash('status', "The ticket $subject has been deleted!");

        return redirect()->route(config('ticketit.main_route') . '.index');
    }

    /**
     * Mark ticket as complete.
     *
     * @param  int $id
     * @return Response
     */
    public function complete($id)
    {
        $ticket = $this->tickets->findOrFail($id);
        $ticket->completed_at = Carbon::now();
        $subject = $ticket->subject;
        $ticket->save();

        session()->flash('status', "The ticket $subject has been completed.");

        return redirect()->route(config('ticketit.main_route') . '.index');

    }

    /**
     * Reopen ticket from complete status.
     *
     * @param  int $id
     * @return Response
     */
    public function reopen($id)
    {
        $ticket = $this->tickets->findOrFail($id);
        $ticket->completed_at = null;
        $subject = $ticket->subject;
        $ticket->save();

        session()->flash('status', "The ticket $subject has been reopened!");

        return redirect()->route(config('ticketit.main_route') . '.index');

    }

    /**
     * Get the agent with the lowest tickets assigned in specific category
     * @param integer $cat_id
     * @return integer $selected_agent_id
     */
    public function autoSelectAgent($cat_id)
    {
        $agents = $this->agent->agents($cat_id);
        $count = 0;
        $lowest_tickets = 1000000;
        foreach ($agents as $agent) {
            if ($count == 0) {
                $lowest_tickets = $agent->agentTickets()->count();
                $selected_agent_id = $agent->id;
            } else {
                $tickets_count = $agent->agentTickets()->count();
                if ($tickets_count < $lowest_tickets) {
                    $lowest_tickets = $tickets_count;
                    $selected_agent_id = $agent->id;
                }
            }
            $count++;
        }
        return $selected_agent_id;
    }

    public function agentSelectList($category_id, $ticket_id)
    {
        $agents = ['auto' => 'Auto Select'] + $this->agent->agentsLists($category_id);
        $selected_Agent = $this->tickets->find($ticket_id)->agent->id;
        $select = '<select class="form-control" id="agent_id" name="agent_id">';
        foreach ($agents as $id => $name) {
            $selected = ($id == $selected_Agent) ? "selected" : "";
            $select .= '<option value="' . $id . '" ' . $selected . '>' . $name . '</option>';
        }
        $select .= '</select>';
        return $select;
    }
}
