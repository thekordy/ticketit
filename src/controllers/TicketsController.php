<?php
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models;

class TicketsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tickets = Models\Ticket::all();
        return view('Ticketit::index');
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
        return view('Ticketit::tickets.create', compact('priorities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $ticket = new Models\Ticket;
        $ticket->subject = $request->input('subject');
        $ticket->content = $request->input('content');
        $ticket->priority_id = $request->input('priority_id');
        $ticket->category_id = $request->input('category_id');
        $ticket->status_id = config('ticketit.default_status_id');
        $ticket->user_id = \Auth::user()->id;
        $ticket->agent_id = $this->chooseAgent($request->input('category_id'));

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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function chooseAgent($cat_id)
    {
        $category = Models\Category::find($cat_id);
        $agents = $category->agents;
        $count = 0;
        foreach ($agents as $agent) {
            if ($count == 0) {
                $lowest_tickets = ($agent->ticketsCount != null) ? $agent->ticketsCount : 0;
                $selected_agent_id = $agent->id;
            }
            else {
                $agent_tickets = ($agent->ticketsCount != null) ? $agent->ticketsCount : 0;
                if ($agent_tickets < $lowest_tickets) {
                    $lowest_tickets = $agent_tickets;
                    $selected_agent_id = $agent->id;
                }
            }
            $count++;
        }
        return $selected_agent_id;
    }
}