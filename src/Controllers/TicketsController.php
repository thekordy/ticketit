<?php
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PrepareTicketRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models;

class TicketsController extends Controller {

    public function __construct()
    {
        $this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => ['show']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAgentMiddleware', ['only' => ['edit', 'update']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of tickets related to user.
     *
     * @return Response
     */
    public function index()
    {
        $items = config('ticketit.paginate_items');
        if(Models\Agent::isAdmin()) {
            $tickets = Models\Ticket::orderBy('updated_at', 'desc')->paginate($items);
        }
        elseif (Models\Agent::isAgent()) {
            $agent = Models\Agent::find(\Auth::user()->id);
            $tickets = $agent->agentTickets()->orderBy('updated_at', 'desc')->paginate($items);
        }
        else {
            $user = Models\Agent::find(\Auth::user()->id);
            $tickets = $user->userTickets()->orderBy('updated_at', 'desc')->paginate($items);
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
        $ticket = new Models\Ticket;

        $ticket->subject = $request->subject;
        $ticket->content = $request->content;
        $ticket->priority_id = $request->priority_id;
        $ticket->category_id = $request->category_id;

        $ticket->status_id = config('ticketit.default_status_id');
        $ticket->user_id = \Auth::user()->id;
        $ticket->agent_id = $this->autoSelectAgent($request->input('category_id'));
        
        $ticket->save();

        Session::flash('status', "The ticket has been created!");

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
        $ticket = Models\Ticket::find($id);
        $status_lists = Models\Status::lists('name', 'id');
        $priority_lists = Models\Priority::lists('name', 'id');
        $category_lists = Models\Category::lists('name', 'id');
        $agent_lists = ['auto' => 'Auto Select'] + Models\Agent::agentsLists($ticket->category_id);
        $comments = $ticket->comments()->paginate(config('ticketit.paginate_items'));
        return view('ticketit::tickets.show',
            compact('ticket', 'status_lists', 'priority_lists', 'category_lists', 'agent_lists', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        $ticket = Models\Ticket::findOrFail($id);

        $ticket->subject = $request->subject;
        $ticket->content = $request->content;
        $ticket->status_id = $request->status_id;
        $ticket->category_id = $request->category_id;
        $ticket->priority_id = $request->priority_id;

        if ($request->input('agent_id') == 'auto') {
            $ticket->agent_id = $this->autoSelectAgent($request->input('category_id'));
        }
        else {
            $ticket->agent_id = $request->input('agent_id');
        }


        $ticket->save();

        Session::flash('status', "Ticket has been modified!");

        return redirect()->route(config('ticketit.main_route').'.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $ticket = Models\Ticket::findOrFail($id);
        $name = $ticket->subject;
        $ticket->delete();

        Session::flash('status', "The ticket $name has been deleted!");

        return redirect()->route(config('ticketit.main_route').'.index');
    }

    /**
     * Get the agent with the lowest tickets assigned in specific category
     * @param integer $cat_id
     * @return integer $selected_agent_id
     */
    public function autoSelectAgent($cat_id)
    {
        $agents = Models\Agent::agents($cat_id);
        $count = 0;
        $lowest_tickets = 1000000;
        foreach ($agents as $agent) {
            if ($count == 0) {
                $lowest_tickets = $agent->agentTickets->count();
                $selected_agent_id = $agent->id;
            }
            else {
                $tickets_count = $agent->agentTickets->count();
                if ($tickets_count < $lowest_tickets) {
                    $lowest_tickets = $tickets_count;
                    $selected_agent_id = $agent->id;
                }
            }
            $count++;
        }
        return $selected_agent_id;
    }

    public function agentSelectList($category_id,$ticket_id)
    {
        $agents = ['auto' => 'Auto Select'] + Models\Agent::agentsLists($category_id);
        $selected_Agent = Models\Ticket::find($ticket_id)->agent->id;
        $select = '<select class="form-control" id="agent_id" name="agent_id">';
        foreach ($agents as $id => $name) {
            $selected = ($id == $selected_Agent) ? "selected" : "";
            $select .= '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
        }
        $select .= '</select>';
        return $select;
    }
}

