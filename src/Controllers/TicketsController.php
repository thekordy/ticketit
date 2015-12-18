<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Setting;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Attachment;
use Kordy\Ticketit\Requests\PrepareTicketStoreRequest;
use Kordy\Ticketit\Requests\PrepareTicketUpdateRequest;
use yajra\Datatables\Datatables;
use yajra\Datatables\Engines\EloquentEngine;

class TicketsController extends Controller
{

    protected $tickets;
    protected $agent;

    public function __construct(Ticket $tickets, Agent $agent)
    {
        $this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => ['show']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAgentMiddleware', ['only' => ['edit', 'update']]);
        $this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['destroy']]);

        $this->tickets = $tickets;
        $this->agent = $agent;
    }

    public function data(Datatables $datatables, $complete = false)
    {
        $user = $this->agent->find(auth()->user()->id);

        if ($complete) {
            $collection = $user->getTickets(true);
        } else {
            $collection = $user->getTickets();
        }

        $collection
            ->join('users', 'users.id', '=', 'ticketit.user_id')
            ->join('ticketit_statuses', 'ticketit_statuses.id', '=', 'ticketit.status_id')
            ->join('ticketit_priorities', 'ticketit_priorities.id', '=', 'ticketit.priority_id')
            ->join('ticketit_categories', 'ticketit_categories.id', '=', 'ticketit.category_id')
            ->select([
                'ticketit.id',
                'ticketit.subject AS subject',
                'ticketit_statuses.name AS status',
                'ticketit_statuses.color AS color_status',
                'ticketit_priorities.color AS color_priority',
                'ticketit_categories.color AS color_category',
                'ticketit.id AS agent',
                'ticketit.updated_at AS updated_at',
                'ticketit_priorities.name AS priority',
                'users.name AS owner',
                'ticketit.agent_id',
                'ticketit_categories.name AS category',
            ]);

        $collection = $datatables->of($collection);

        $this->renderTicketTable($collection);

        $collection->editColumn('updated_at', '{{ $updated_at->diffForHumans() }}');

        return $collection->make(true);
    }

    public function renderTicketTable(EloquentEngine $collection)
    {

        $collection->editColumn('subject', function ($ticket) {
            return link_to_route(
                Setting::grab('main_route') . '.show',
                $ticket->subject,
                $ticket->id
            );
        });

        $collection->editColumn('status', function ($ticket) {
            $color = $ticket->color_status;
            $status = $ticket->status;
            return "<div style='color: $color'>$status</div>";
        });

        $collection->editColumn('priority', function ($ticket) {
            $color = $ticket->color_priority;
            $priority = $ticket->priority;
            return "<div style='color: $color'>$priority</div>";
        });

        $collection->editColumn('category', function ($ticket) {
            $color = $ticket->color_category;
            $category = $ticket->category;
            return "<div style='color: $color'>$category</div>";
        });

        $collection->editColumn('agent', function ($ticket) {
            $ticket = $this->tickets->find($ticket->id);
            return $ticket->agent->name;
        });

        return $collection;
    }

    /**
     * Display a listing of active tickets related to user.
     *
     * @return Response
     */
    public function index()
    {
        $complete = false;
        return view('ticketit::index', compact('complete'));
    }

    /**
     * Display a listing of completed tickets related to user.
     *
     * @return Response
     */
    public function indexComplete()
    {
        $complete = true;
        return view('ticketit::index', compact('complete'));
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
    public function store(PrepareTicketStoreRequest $request)
    {
        $ticket = new Ticket;

        $ticket->subject = $request->subject;
        $ticket->content = $request->content;
        $ticket->priority_id = $request->priority_id;
        $ticket->category_id = $request->category_id;

        $ticket->status_id = Setting::grab('default_status_id');
        $ticket->user_id = auth()->user()->id;
        $ticket->agent_id = $this->autoSelectAgent($request->input('category_id'));

        $ticket->save();

        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getFileName() . '.' . $extension;
            $filepath = '/app/attachments/'.$ticket->user_id.'/';
            $file->move(storage_path().$filepath, $filename);

            $file_entry = new Attachment;
            $file_entry->mime = $file->getClientMimeType();
            $file_entry->original_filename = $file->getClientOriginalName();
            $file_entry->filename = $filename;
            $file_entry->filepath = $filepath;
            $file_entry->ticket_id = $ticket->id;
            $file_entry->save();
        }

        session()->flash('status', trans('ticketit::lang.the-ticket-has-been-created'));

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

        $close_perm = $this->permToClose($id);
        $reopen_perm = $this->permToReopen($id);

        $cat_agents = Models\Category::find($ticket->category_id)->agents()->agentsLists();
        if (is_array($cat_agents)) {
            $agent_lists = ['auto' => 'Auto Select'] + $cat_agents;
        } else {
            $agent_lists = ['auto' => 'Auto Select'];
        }

        $comments = $ticket->comments()->orderBy('id', 'desc')->paginate(Setting::grab('paginate_items'));

        $total_time = 0;
        foreach ($ticket->comments as $comment) {
            $total_time += $comment->time_spent;
        }
        $total_hours = intval($total_time/60);
        $total_minutes = $total_time % 60;
        return view('ticketit::tickets.show',
            compact('ticket', 'status_lists', 'priority_lists', 'category_lists', 'agent_lists', 'comments',
                'close_perm', 'reopen_perm', 'total_hours', 'total_minutes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PrepareTicketUpdateRequest $request, $id)
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

        session()->flash('status', trans('ticketit::lang.the-ticket-has-been-modified'));

        return redirect()->route(Setting::grab('main_route') . '.show', $id);
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

        session()->flash('status', trans('ticketit::lang.the-ticket-has-been-deleted', ['name' => $subject]));

        return redirect()->route(Setting::grab('main_route') . '.index');
    }

    /**
     * Mark ticket as complete.
     *
     * @param  int $id
     * @return Response
     */
    public function complete($id)
    {
        if ($this->permToClose($id) == 'yes') {

            $ticket = $this->tickets->findOrFail($id);
            $ticket->completed_at = Carbon::now();

            if (Setting::grab('default_close_status_id')) {
                $ticket->status_id = Setting::grab('default_close_status_id');
            }

            $subject = $ticket->subject;
            $ticket->save();

            session()->flash('status', trans('ticketit::lang.the-ticket-has-been-completed', ['name' => $subject]));

            return redirect()->route(Setting::grab('main_route') . '.index');
        }

        return redirect()->route(Setting::grab('main_route') . '.index')
            ->with('warning', trans('ticketit::lang.you-are-not-permitted-to-do-this'));
    }

    /**
     * Reopen ticket from complete status.
     *
     * @param  int $id
     * @return Response
     */
    public function reopen($id)
    {
        if ($this->permToReopen($id) == 'yes') {

            $ticket = $this->tickets->findOrFail($id);
            $ticket->completed_at = null;

            if (Setting::grab('default_reopen_status_id')) {
                $ticket->status_id = Setting::grab('default_reopen_status_id');
            }

            $subject = $ticket->subject;
            $ticket->save();

            session()->flash('status', trans('ticketit::lang.the-ticket-has-been-reopened', ['name' => $subject]));

            return redirect()->route(Setting::grab('main_route') . '.index');
        }

        return redirect()->route(Setting::grab('main_route') . '.index')
            ->with('warning', trans('ticketit::lang.you-are-not-permitted-to-do-this'));
    }

    /**
     * Get the agent with the lowest tickets assigned in specific category
     *
     * @param integer $cat_id
     * @return integer $selected_agent_id
     */
    public function autoSelectAgent($cat_id)
    {
        $agents = $agents = Models\Category::find($cat_id)->agents()->agents();
        $count = 0;
        $lowest_tickets = 1000000;

        // If no agent selected, select the admin
        $first_admin = Agent::admins()->first();
        $selected_agent_id = $first_admin->id;

        foreach ($agents as $agent) {
            if ($count == 0) {
                $lowest_tickets = $agent->agentTickets->count();
                $selected_agent_id = $agent->id;
            } else {
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

    public function agentSelectList($category_id, $ticket_id)
    {
        $cat_agents = Models\Category::find($category_id)->agents()->agentsLists();
        if (is_array($cat_agents)) {
            $agents = ['auto' => 'Auto Select'] + $cat_agents;
        } else {
            $agents = ['auto' => 'Auto Select'];
        }

        $selected_Agent = $this->tickets->find($ticket_id)->agent->id;
        $select = '<select class="form-control" id="agent_id" name="agent_id">';
        foreach ($agents as $id => $name) {
            $selected = ($id == $selected_Agent) ? "selected" : "";
            $select .= '<option value="' . $id . '" ' . $selected . '>' . $name . '</option>';
        }
        $select .= '</select>';
        return $select;
    }

    /**
     * @param $id
     * @return bool
     */
    public function permToClose($id)
    {
        $close_ticket_perm = Setting::grab('close_ticket_perm');

        if ($this->agent->isAdmin() && $close_ticket_perm['admin'] == 'yes') {
            return 'yes';
        }
        if ($this->agent->isAgent() && $close_ticket_perm['agent'] == 'yes') {
            return 'yes';
        }
        if ($this->agent->isTicketOwner($id) && $close_ticket_perm['owner'] == 'yes') {
            return 'yes';
        }
        return 'no';
    }

    /**
     * @param $id
     * @return bool
     */
    public function permToReopen($id)
    {
        $reopen_ticket_perm = Setting::grab('reopen_ticket_perm');
        if ($this->agent->isAdmin() && $reopen_ticket_perm['admin'] == 'yes') {
            return 'yes';
        } elseif ($this->agent->isAgent() && $reopen_ticket_perm['agent'] == 'yes') {
            return 'yes';
        } elseif ($this->agent->isTicketOwner($id) && $reopen_ticket_perm['owner'] == 'yes') {
            return 'yes';
        }
        return 'no';
    }

    /**
     * Calculate average closing period of days per category for number of months
     * @param int $period
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function monthlyPerfomance($period = 2, $categories_all)
    {
        foreach ($categories_all as $category) {
            $records['categories'][] = $category->name;
        }
        for ($m = $period; $m >= 0; $m--) {
            $from = Carbon::now();
            $from->day = 1;
            $from->subMonth($m);
            $to = Carbon::now();
            $to->day = 1;
            $to->subMonth($m);
            $to->endOfMonth();
            $records['interval'][$from->format('F Y')] = [];
            foreach ($categories_all as $category) {
                $records['interval'][$from->format('F Y')][] = round($this->intervalPerformance($from, $to, $category), 1);
            }
        }
        return $records;
    }

    /**
     * Calculate the average date length it took to solve tickets within date period
     * @param $from
     * @param $to
     * @return int
     */
    public function intervalPerformance($from, $to, $category) {
        $tickets = $category->tickets->filter(function ($ticket) use ($from, $to) {
            $completed = new Carbon($ticket->completed_at);
            return $completed->between(new Carbon($from), new Carbon($to));
        });

        if(!$tickets->count() > 0) {
            return 0;
        }

        $performance_count = 0;
        $counter = 0;
        foreach ($tickets as $ticket) {
            $performance_count += $this->ticketPerformance($ticket);
            $counter++;
        }
        $performance_average = $performance_count / $counter;
        return $performance_average;
    }

    /**
     * Calculate the date length it took to solve a ticket
     * @param Ticket $ticket
     * @return integer|false
     */
    public function ticketPerformance($ticket) {
        if ($ticket->completed_at == null)
            return false;

        $created = new Carbon($ticket->created_at);
        $completed = new Carbon($ticket->completed_at);
        $length = $created->diff($completed)->days;

        return $length;
    }

}
