<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Requests\PrepareTicketRequest;
use yajra\Datatables\Datatables;

class TicketsController extends Controller {

	protected $tickets;
	protected $agent;

	public function __construct(Ticket $tickets, Agent $agent) {
		$this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => ['show']]);
		$this->middleware('Kordy\Ticketit\Middleware\IsAgentMiddleware', ['only' => ['edit', 'update']]);
		$this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['destroy']]);

		$this->tickets = $tickets;
		$this->agent = $agent;
	}

	public function data(Datatables $datatables, $complete = false) {
		$user = $this->agent->find(auth()->user()->id);

		if ($complete) {
			$collection = $user->getTickets(true)->complete();
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
				'ticketit.subject as subject',
				'ticketit_statuses.name as status',
				'ticketit.updated_at as updated_at',
				'ticketit_priorities.name as priority',
				'users.name',
				'ticketit.agent_id',
				'ticketit_categories.name as category',
			]);

		$collection = $datatables->of($collection);

		$collection->editColumn('subject', function ($ticket) {
			return link_to_route(
				config('ticketit.main_route') . '.show',
				$ticket->subject,
				$ticket->id
			);
		});

		$collection->editColumn('updated_at', '{{ $updated_at->diffForHumans() }}');

		return $collection->make(true);
	}

	/**
	 * Display a listing of active tickets related to user.
	 *
	 * @return Response
	 */
	public function index() {
		$complete = false;
		return view('ticketit::index', compact('complete'));
	}

	/**
	 * Display a listing of completed tickets related to user.
	 *
	 * @return Response
	 */
	public function indexComplete() {
		$complete = true;
		return view('ticketit::index', compact('complete'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
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
	public function store(PrepareTicketRequest $request) {
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
	public function show($id) {
		$ticket = $this->tickets->find($id);

		$status_lists = Models\Status::lists('name', 'id');
		$priority_lists = Models\Priority::lists('name', 'id');
		$category_lists = Models\Category::lists('name', 'id');

		$close_perm = $this->permToClose($id);
		$reopen_perm = $this->permToReopen($id);

		$agent_lists = array_merge(['auto' => 'Auto Select'], $this->agent->agentsLists($ticket->category_id)->all());
		$comments = $ticket->comments()->paginate(config('ticketit.paginate_items'));
		return view('ticketit::tickets.show',
			compact('ticket', 'status_lists', 'priority_lists', 'category_lists', 'agent_lists', 'comments',
				'close_perm', 'reopen_perm'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PrepareTicketRequest $request, $id) {
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
	public function destroy($id) {
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
	public function complete($id) {
		if ($this->permToClose($id) == 'yes') {

			$ticket = $this->tickets->findOrFail($id);
			$ticket->completed_at = Carbon::now();

			if (config('ticketit.default_close_status_id')) {
				$ticket->status_id = config('ticketit.default_close_status_id');
			}

			$subject = $ticket->subject;
			$ticket->save();

			session()->flash('status', "The ticket $subject has been completed.");

			return redirect()->route(config('ticketit.main_route') . '.index');
		}

		return redirect()->route(config('ticketit.main_route') . '.index')
			->with('warning', 'You are not permitted to do this action!');
	}

	/**
	 * Reopen ticket from complete status.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function reopen($id) {
		if ($this->permToReopen($id) == 'yes') {

			$ticket = $this->tickets->findOrFail($id);
			$ticket->completed_at = null;

			if (config('ticketit.default_reopen_status_id')) {
				$ticket->status_id = config('ticketit.default_reopen_status_id');
			}

			$subject = $ticket->subject;
			$ticket->save();

			session()->flash('status', "The ticket $subject has been reopened!");

			return redirect()->route(config('ticketit.main_route') . '.index');
		}

		return redirect()->route(config('ticketit.main_route') . '.index')
			->with('warning', 'You are not permitted to do this action!');
	}

	/**
	 * Get the agent with the lowest tickets assigned in specific category
	 * @param integer $cat_id
	 * @return integer $selected_agent_id
	 */
	public function autoSelectAgent($cat_id) {
		$agents = $this->agent->agents($cat_id);
		$count = 0;
		$lowest_tickets = 1000000;
		foreach ($agents as $agent) {
			if ($this->agent->isAgent()) {
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
			}
			$count++;
		}
		isset($selected_agent_id) ? true : $selected_agent_id = config('ticketit.admin_ids')[0];
		return $selected_agent_id;
	}

	public function agentSelectList($category_id, $ticket_id) {
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

	/**
	 * @param $id
	 * @return bool
	 */
	public function permToClose($id) {
		$close_ticket_perm = config('ticketit.close_ticket_perm');

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
	public function permToReopen($id) {
		$reopen_ticket_perm = config('ticketit.reopen_ticket_perm');
		if ($this->agent->isAdmin() && $reopen_ticket_perm['admin'] == 'yes') {
			return 'yes';
		} elseif ($this->agent->isAgent() && $reopen_ticket_perm['agent'] == 'yes') {
			return 'yes';
		} elseif ($this->agent->isTicketOwner($id) && $reopen_ticket_perm['owner'] == 'yes') {
			return 'yes';
		}
		return 'no';
	}
}
