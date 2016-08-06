<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
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
}
