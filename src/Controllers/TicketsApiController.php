<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Kordy\Ticketit\Helpers\TicketitResponseTransformer;
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
        $ticket = TicketitTicket::findOrFail($id);

        $ticket->hideFieldsByPolicy('ticket.show');

        return $ticket;
    }

    /**
     * Get a single ticket using its access token value.
     *
     * @param string $token
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function showByToken($token)
    {
        $ticket = TicketitTicket::where('access_token', $token)->firstOrFail();

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

        $ticket = $this->createTicketableTicket($ticket_data);

        return TicketitResponseTransformer::respond(['id' => $ticket->getKey()]);
    }

    /**
     * Update a ticket.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $ticket = TicketitTicket::findOrFail($id);

        // get validation rules from config/ticketit/validation.php
        $validation_rules = config('ticketit.validation.ticket_update.rules');

        $this->validate($request, $validation_rules);

        $ticket_data = $request->all();

        $this->updateTicketableTicket($ticket_data, $ticket);

        return TicketitResponseTransformer::respondSuccess();
    }

    /**
     * Setup new ticket attributes and create it.
     *
     * @param $ticket_data
     *
     * @return TicketitTicket
     */
    public function createTicketableTicket($ticket_data)
    {
        $ticket_data = $this->setStatusAndPriorityIds($ticket_data);

        $ticket_data = $this->setAgentId($ticket_data);

        $ticket_data = $this->setTicketableUser($ticket_data);

        $ticket_data = $this->generateAccessToken($ticket_data);

        // it could be done using $user->ownTicket()->create() but it won't then be auditable
        // this should be safe enough by using config/ticketit/validation.php in combination with the model fillable
        $ticket = TicketitTicket::create($ticket_data);

        return $ticket;
    }

    /**
     * Setup the ticket attributes and update it.
     *
     * @param $ticket_data
     * @param $ticket
     *
     * @return TicketitTicket
     */
    public function updateTicketableTicket($ticket_data, $ticket)
    {
        $ticket_data = $this->setAgentId($ticket_data, $ticket);

        // this should be safe enough by using config/ticketit/validation.php in combination with the model fillable
        $ticket = $ticket->update($ticket_data);

        return $ticket;
    }

    /**
     * Destroy the given ticket.
     *
     * @param string|int $id
     *
     * @return int
     */
    public function destroy($id)
    {
        return TicketitTicket::destroy($id);
    }

    /**
     * Close the given ticket.
     *
     * @param string|int $id
     *
     * @return mixed
     */
    public function close($id)
    {
        $ticket = TicketitTicket::findOrFail($id);
        $ticket->closed_at = new \DateTime('now');
        $ticket->save();

        return TicketitResponseTransformer::respondSuccess();
    }

    /**
     * Reopen the given ticket.
     *
     * @param string|int $id
     *
     * @return mixed
     */
    public function reopen($id)
    {
        $ticket = TicketitTicket::findOrFail($id);
        $ticket->closed_at = null;
        $ticket->save();

        return TicketitResponseTransformer::respondSuccess();
    }

    // Todo store for guests (token ticket with no user) with/without email verification
    // Todo email notifications (configurable)

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
        $query = $user->ownTickets();

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
     * Set the user owner of the ticket, whether the logged in user or the passed post attr user_class and user_id.
     *
     * @param $ticket_data
     *
     * @throws \Exception
     *
     * @return array
     */
    protected function setTicketableUser($ticket_data)
    {
        if (!empty($ticket_data['user_class']) && !empty($ticket_data['user_id'])) {
            // submitted for a user
            $ticket_data['ticketable_type'] = $ticket_data['user_class'];
            $ticket_data['ticketable_id'] = $ticket_data['user_id'];

            return $ticket_data;
        } elseif (Auth::check()) {
            // submitted by a user for himself
            $user = \Auth::user();

            // user_class relates to the custom morphmap settings in config/ticketit/models.php
            $ticketable_class = $user->ownTickets()->getMorphClass(); // 'user'
            $ticketable_id_value = $user->getKey(); // user primary key value

            $ticket_data['ticketable_type'] = $ticketable_class;
            $ticket_data['ticketable_id'] = $ticketable_id_value;

            return $ticket_data;
        } else {
            throw new \Exception('Could not determine a user for this ticket!');
        }
    }

    /**
     * Set status and priority to default if not set in the request.
     *
     * @param $ticket_data
     *
     * @return array
     */
    protected function setStatusAndPriorityIds($ticket_data)
    {
        // if not passed, set status_id as default_status_id in config/ticketit/ticket.php
        if (empty($ticket_data['status_id'])) {
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
        if (empty($ticket_data['priority_id'])) {
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
     * @param TicketitTicket|null $ticket (optional)
     *
     * @throws \Exception
     *
     * @return array
     */
    protected function setAgentId($ticket_data, $ticket = null)
    {
        list($category, $category_agents) = $this->getCategoryAgents($ticket_data, $ticket);

        // Find an agent in order as follow
        // 1. use agent_id if it is set in the request
        if (!empty($ticket_data['agent_id'])) {
            if (in_array($ticket_data['agent_id'], $category_agents)) {
                return $ticket_data; // the agent_id is already set
            }
            throw new \Exception('The agent is not a member in the selected category');
        }

        // 2. see the category auto assign option
        $auto_assign_option = $category->auto_assign;
        $agent_id = null;
        switch ($auto_assign_option) {
            case 'manual':
                // manual assignment, to be assigned later by the category admin
                $ticket_data['agent_id'] = null;
                break;
            case 'least_local':
                // auto assign to the least assigned agent, counting only this category tickets
                $agent = $this->leastLocalAgent($category, $category_agents);
                $ticket_data['agent_id'] = $agent ? $agent->agent_id : $category->agents->first()->getKey();
                break;
            case 'least_total':
                // auto assign to the least assigned agent, counting all agent's open tickets
                $agent = $this->leastTotalAgent($category_agents);
                $ticket_data['agent_id'] = $agent ? $agent->agent_id : $category->agents->first()->getKey();
                break;
            case 'admin':
                // assign to the category admin_id
                $ticket_data['agent_id'] = $category->admin_id;
                break;
        }

        return $ticket_data;
    }

    /**
     * Get the least assigned agent to specific category.
     *
     * @param $category
     * @param array $category_agents
     *
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
     *
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

    /**
     * Generate a unique secured access token.
     *
     * @param $ticket_data
     *
     * @return mixed
     */
    protected function generateAccessToken($ticket_data)
    {
        do {
            $unique_token = bin2hex(openssl_random_pseudo_bytes(40));
        } while (TicketitTicket::where('access_token', $unique_token)->count() > 0);

        $ticket_data['access_token'] = $unique_token;

        return $ticket_data;
    }

    /**
     * @param $ticket_data
     * @param $ticket
     *
     * @throws \Exception
     *
     * @return array
     */
    protected function getCategoryAgents($ticket_data, $ticket)
    {
        if (!empty($ticket_data['category_id'])) {
            // get new category if passed in the update request
            $category = TicketitCategory::with('agents')->findOrFail($ticket_data['category_id']);
        } else {
            $ticket_ins = app('TicketitTicket');
            if (!$ticket instanceof $ticket_ins) {
                throw new \Exception('You have to pass the category id or ticket instance!');
            }
            // get current category
            $category = TicketitCategory::with('agents')->findOrFail($ticket->category_id);
        }

        $agent_key_name = app('TicketitAgent')->getKeyName();
        $category_agents = $category->agents->pluck($agent_key_name)->toArray();

        if (empty($category_agents)) {
            throw new \Exception($category->name.' does not have agents, please assign at least one!');
        }

        return [$category, $category_agents];
    }
}
