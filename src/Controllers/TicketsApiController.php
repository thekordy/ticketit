<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use TicketitCategory;
use TicketitPriority;
use TicketitStatus;
use TicketitTicket;

class TicketsApiController extends Controller
{
    // what related models should be loaded with eager loading
    public $get_with_relations = ['ticketable', 'agent', 'status', 'priority', 'category'];

    /**
     * Get list of user's own tickets
     * It uses GET filter params to filter results.
     *
     * @return TicketitTicket
     */
    public function indexOwn()
    {
        $user = \Auth::user();
        $query = $this->getUserTickets($user);
        $this->applyFilters($query);
        $tickets = $query->get();

        return $tickets;
    }

    /**
     * Get list of agent's assigned tickets
     * It uses GET filter params to filter results.
     *
     * @return TicketitTicket
     */
    public function indexAssigned()
    {
        // filter by current logged in agent id
        request()->merge(['agent_id' => \Auth::user()->getKey()]);

        // if a user_id filter is set, get only this user tickets, else get all users tickets
        $query = $this->getConditionalUserTicketsQuery();

        // Apply filters including category_id filter
        $this->applyFilters($query);

        $tickets = $query->get();

        return $tickets;
    }

    /**
     * Get all tickets in a category.
     *
     * @param $id
     *
     * @return string
     */
    public function indexCategory($id)
    {
        // filter by passed category id
        request()->merge(['category_id' => (int) $id]);

        // if a user_id filter is set, get only this user tickets, else get all users tickets
        $query = $this->getConditionalUserTicketsQuery();

        // Apply filters including category_id filter
        $this->applyFilters($query);

        $tickets = $query->get();

        return $tickets;
    }

    /**
     * Get all tickets.
     *
     * @return string
     */
    public function indexAll()
    {
        // if a user_id filter is set, get only this user tickets, else get all users tickets
        $query = $this->getConditionalUserTicketsQuery();

        // Apply filters including category_id filter
        $this->applyFilters($query);

        $tickets = $query->get();

        return $tickets;
    }

    /**
     * Get a single ticket.
     *
     * @param $id
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        $query = TicketitTicket::with($this->get_with_relations);

        $ticket = $query->findOrFail($id);

        return $ticket;
    }

    /**
     * Create a single ticket.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        // get validation rules from config/ticketit/validation.php
        $validation_rules = config('ticketit.validation.ticket_store.rules');

        $this->validate($request, $validation_rules);

        $ticket_data = $request->all();

        $ticket = $this->createTicketableTicket($ticket_data, $request);

        return $ticket;
    }

    /**
     * Update a ticket.
     *
     * @param Request $request
     * @param integer $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $ticket = TicketitTicket::findOrFail($id);

        // get validation rules from config/ticketit/validation.php
        $validation_rules = config('ticketit.validation.ticket_update.rules');

        $this->validate($request, $validation_rules);

        $ticket_data = $request->all();

        $ticket = $this->updateTicketableTicket($ticket_data, $request, $ticket);

        return $ticket;
    }

    // Todo delete
    // Todo close ticket
    // Todo reopen ticket

    /**
     * Filter ticket query based on filters passed in GET parameters.
     *
     * @param $query
     */
    protected function applyFilters($query)
    {
        // Todo Some validation before proceeding in filtering

        $subject = request()->input('subject');
        $content = request()->input('content');
        $agent_id = request()->input('agent_id');
        $category_id = request()->input('category_id');
        $type = request()->input('type');
        $status_id = request()->input('status_id');
        $priority_id = request()->input('priority_id');

        // Todo check dates format
        $created_before = request()->input('created_before');
        $created_after = request()->input('created_after');
        $closed_before = request()->input('closed_before');
        $closed_after = request()->input('closed_after');

        if ($subject) {
            $query->where('subject', 'like', '%'.$subject.'%');
        }
        if ($content) {
            $query->where('content', 'like', '%'.$content.'%');
        }
        if ($agent_id) {
            $query->where('agent_id', $agent_id);
        }
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        if ($type) {
            if ($type == 'open') {
                $query->whereNull('closed_at');
            } elseif ($type == 'closed') {
                $query->whereNotNull('closed_at');
            }
        }
        if ($status_id) {
            $query->where('status_id', $status_id);
        }
        if ($priority_id) {
            $query->where('priority_id', $priority_id);
        }
        if ($created_before) {
            $query->where('created_at', '<', $created_before);
        }
        if ($created_after) {
            $query->where('created_at', '>', $created_after);
        }
        if ($closed_before) {
            $query->where('closed_at', '<', $closed_before);
        }
        if ($closed_after) {
            $query->where('closed_at', '>', $closed_after);
        }
    }

    /**
     * Get all tickets for a specific user.
     *
     * @param $user
     *
     * @return mixed
     */
    protected function getUserTickets($user)
    {
        $query = $user->ownTickets()->with($this->get_with_relations);

        return $query;
    }

    /**
     * If user_id get parameter is passed, then filter only this user's tickets, else get all tickets.
     *
     * @return TicketitTicket
     */
    protected function getConditionalUserTicketsQuery()
    {
        $user_id = request()->input('user_id');
        if ($user_id) {
            $user = \TicketitUser::findOrFail($user_id);
            $query = $this->getUserTickets($user);

            return $query;
        } else {
            $query = TicketitTicket::with($this->get_with_relations);

            return $query;
        }
    }

    /**
     * Setup new ticket attributes and create it.
     *
     * @param $ticket_data
     * @param Request $request
     *
     * @return TicketitTicket
     */
    protected function createTicketableTicket($ticket_data, $request)
    {
        $ticket_data = $this->setStatusAndPriorityIds($ticket_data, $request);

        $ticket_data = $this->setAgentId($ticket_data, $request);

        $ticket_data = $this->setTicketableUser($ticket_data, $request);

        // it could be done using $user->ownTicket()->create() but it won't then be auditable
        return TicketitTicket::create($ticket_data);
    }

    /**
     * Setup the ticket attributes and update it.
     *
     * @param $ticket_data
     * @param Request $request
     *
     * @param $ticket
     * @return TicketitTicket
     */
    protected function updateTicketableTicket($ticket_data, $request, $ticket)
    {

        $ticket_data = $this->setAgentId($ticket_data, $request, $ticket);

        $ticket->update($ticket_data);

        return $ticket;
    }

    /**
     * Set the user owner of the ticket, whether the logged in user or the passed post attr user_class and user_id.
     *
     * @param $ticket_data
     * @param Request $request
     *
     * @return array
     */
    protected function setTicketableUser($ticket_data, $request)
    {
        $user = \Auth::user();

        // user_class relates to the custom morphmap settings in config/ticketit/models.php
        if ($request->has('user_class')) {
            $ticketable_class = $ticket_data['user_class'];
        } else {
            $ticketable_class = $user->ownTickets()->getMorphClass(); // 'user'
        }

        if ($request->has('user_id')) {
            $ticketable_id_value = $ticket_data['user_id'];
        } else {
            $ticketable_id_value = $user->getKey(); // user primary key value
        }

        $ticketable_type = $user->ownTickets()->getPlainMorphType(); // 'ticketable_type'
        $ticketable_id = $user->ownTickets()->getPlainForeignKey(); // 'ticktable_id'

        if ($ticketable_type) {
            $ticket_data[$ticketable_type] = $ticketable_class;
            $ticket_data[$ticketable_id] = $ticketable_id_value;

            return $ticket_data;
        }

        return $ticket_data;
    }

    /**
     * @param $ticket_data
     * @param Request $request
     *
     * @return array
     */
    protected function setStatusAndPriorityIds($ticket_data, $request)
    {
        // if not passed, set status_id as default_status_id in config/ticketit/ticket.php
        if (!$request->has('status_id')) {
            $default_status_id = config('ticketit.ticket.default_status_id');

            switch ($default_status_id) {
                case 'first':
                    $status = TicketitStatus::orderBy('id', 'asc')->firstOrFail();
                    break;
                case 'last':
                    $status = TicketitStatus::orderBy('id', 'desc')->firstOrFail();
                    break;
                default:
                    $status = TicketitStatus::findOrFail($default_status_id);
                    break;
            }

            $ticket_data['status_id'] = $status->getKey();
        }

        // if not passed, set status_id as default_priority_id in config/ticketit/ticket.php
        if (!$request->has('priority_id')) {
            $default_priority_id = config('ticketit.ticket.default_priority_id');

            switch ($default_priority_id) {
                case 'first':
                    $priority = TicketitPriority::orderBy('id', 'asc')->firstOrFail();
                    break;
                case 'last':
                    $priority = TicketitPriority::orderBy('id', 'desc')->firstOrFail();
                    break;
                default:
                    $priority = TicketitPriority::findOrFail($default_priority_id);
                    break;
            }

            $ticket_data['priority_id'] = $priority->getKey();
        }

        return $ticket_data;
    }

    /**
     * Set agent for the ticket.
     *
     * @param $ticket_data
     * @param Request $request
     * @param TicketitTicket|null $ticket (optional)
     * @return array
     * @throws \Exception
     */
    protected function setAgentId($ticket_data, $request, $ticket = null)
    {
        if ($request->has('category_id')) {
            // get new category if passed in the update request
            $category = TicketitCategory::findOrFail($ticket_data['category_id']);
        } else {
            // get current category
            $category = TicketitCategory::findOrFail($ticket->category_id);
        }

        $agent_key_name = app('TicketitAgent')->getKeyName();
        $category_agents = $category->agents->pluck($agent_key_name)->toArray();

        // Find an agent in order as follow
        // 1. use agent_id if it is set in the request
        if ($request->has('agent_id')) {
            if (in_array($ticket_data['agent_id'], $category_agents)) {
                return $ticket_data; // the agent_id is already set
            }
            throw new \Exception('The agent is not a member in the selected category');
        }

        // 2. see the category auto assign option
        $auto_assign_option = $category->auto_assign;
        $agent_id = null;
        switch ($auto_assign_option) {
            case 'least_local':
                // auto assign to the least assigned agent, counting only this category tickets
                $agent = $this->leastLocalAgent($category, $category_agents);
                $agent_id = $agent ? $agent->agent_id : null;
                break;
            case 'least_total':
                // auto assign to the least assigned agent, counting all agent's open tickets
                $agent = $this->leastTotalAgent($category_agents);
                $agent_id = $agent ? $agent->agent_id : null;
                break;
            case 'admin':
                // assign to the category admin_id
                $agent_id = $category->admin_id;
                break;
        }

        // if no tickets count, assign to the first agent in the category
        if (!$agent_id) {
            $agent_id = $category->agents()->firstOrFail()->getKey();
        }
        $ticket_data['agent_id'] = $agent_id;

        return $ticket_data;
    }

    /**
     * Get the least assigned agent to specific category.
     *
     * @param $category
     * @param array $category_agents
     * @return Builder
     */
    protected function leastLocalAgent($category, $category_agents)
    {
        return DB::table('ticketit_ticket')
            ->select(DB::raw('count(*) as agent_count, agent_id'))
            ->where('closed_at', null)
            ->where('category_id', $category->getKey())
            ->whereIn('agent_id', $category_agents)
            ->groupBy('agent_id')
            ->orderBy('agent_count', 'asc')
            ->first();
    }

    /**
     * Get the least assigned agent in total of agent's open tickets.
     *
     * @param array $category_agents
     * @return Builder
     */
    protected function leastTotalAgent($category_agents)
    {
        return DB::table('ticketit_ticket')
            ->select(DB::raw('count(*) as agent_count, agent_id'))
            ->where('closed_at', null)
            ->whereIn('agent_id', $category_agents)
            ->groupBy('agent_id')
            ->orderBy('agent_count', 'asc')
            ->first();
    }
}
