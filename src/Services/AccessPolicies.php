<?php

namespace Kordy\Ticketit\Services;

use Exception;
use Illuminate\Http\Request;
use TicketitAgent;
use TicketitTicket;

class AccessPolicies
{
    /**
     * Check if user is admin
     *
     * @param $user
     * @param $model
     * @return bool
     */
    public function isAdmin($user, $model)
    {
        $admin_model = config('ticketit.models.admin');

        return $user instanceof $admin_model && $user->isAdmin();
    }

    /**
     * Check if user is agent
     *
     * @param $user
     * @param $model
     * @return bool
     */
    public function isAgent($user, $model)
    {
        $agent_model = config('ticketit.models.agent');

        return $user instanceof $agent_model && $user->isAgent();
    }

    /**
     * Check if user is the ticket owner
     *
     * @param $user
     * @param $ticket
     * @return bool
     * @throws Exception
     */
    public function ticketOwner($user, $ticket)
    {
        $ticket_model = config('ticketit.models.ticket');
        
        if ($ticket instanceof $ticket_model) {
            return $user == $ticket->ticketable;
        }
        // where $ticket = Request $request passed by the middleware
        if ($ticket instanceof Request) {
            $ticket = $ticket_model->findOrFail($ticket->input('id'));
            return $user == $ticket->ticketable;
        }
        // Invalid argument $ticket
        throw new Exception ("Invalid argument! no valid ticket instance found in $ticket");
    }

    /**
     * Check if user is the ticket agent
     *
     * @param $user
     * @param $ticket
     * @return bool
     * @throws Exception
     */
    public function ticketAgent($user, $ticket)
    {
        $agent_model = app('TicketitAgent');
        
        // check if user is not an agent
        if (! $user instanceof $agent_model || ! $user->isAgent()) {
            return false;
        }

        $id = $user->getKeyName();
        
        $ticket_model = app('TicketitTicket');

        if (! $ticket instanceof $ticket_model && ! $ticket instanceof Request) {
            // Invalid argument $ticket
            throw new Exception ("No valid ticket instance found for $ticket");
        }

        // where $ticket = Request $request passed by the middleware
        if ($ticket instanceof Request) {
            $ticket_id = $ticket->route()->getParameter('id');
            $ticket = $ticket_model->findOrFail($ticket_id);
        }
        
        return $user->$id == $ticket->agent_id;
    }

    /**
     * Check if user is an agent in the same ticket category
     *
     * @param $user
     * @param $ticket
     * @return bool
     * @throws Exception
     */
    public function agentInTicketCategory($user, $ticket)
    {
        $agent_model = app('TicketitAgent');

        // check if user is not an agent
        if (! $user instanceof $agent_model || ! $user->isAgent()) {
            return false;
        }

        $id = $user->getKeyName();

        $ticket_model = app('TicketitTicket');

        if (! $ticket instanceof $ticket_model && ! $ticket instanceof Request) {
            // Invalid $ticket argument
            throw new Exception ("No valid ticket instance found for $ticket");
        }
        
        // where $ticket = Request $request passed by the middleware
        if ($ticket instanceof Request) {
            $ticket_id = $ticket->route()->getParameter('id');
            $ticket = $ticket_model->findOrFail($ticket_id);
        }
        
        $category_agents = $ticket->category->agents->lists('id')->toArray();
        return in_array($user->$id, $category_agents);
    }

    /**
     * Check if user is an agent is a member of a category
     *
     * @param $user
     * @param $category
     * @return bool
     * @throws Exception
     */
    public function agentInCategory($user, $category)
    {
        $agent_model = app('TicketitAgent');

        // check if user is not an agent
        if (! $user instanceof $agent_model || ! $user->isAgent()) {
            return false;
        }

        $id = $user->getKeyName();

        $category_model = app('TicketitCategory');

        if (! $category instanceof $category_model && ! $category instanceof Request) {
            // Invalid $ticket argument
            throw new Exception ("No valid category instance found for $category");
        }
        
        // where $ticket = Request $request passed by the middleware
        if ($category instanceof Request) {
            $category_id = $category->route()->getParameter('id');
            $category = $category_model->findOrFail($category_id);
        }
        
        $category_agents = $category->agents->lists('id')->toArray();
        return in_array($user->$id, $category_agents);
    }

    /**
     * Check if user is admin and has id == 1
     *
     * @param $user
     * @return bool
     */
    public function superAdmin($user)
    {
        $admin_model = config('ticketit.models.admin');

        if (! $user instanceof $admin_model) {
            return false;
        }

        $id = $user->getKeyName();

        return in_array($user->$id, config('ticketit.acl.superadmins'));
    }
}