<?php

namespace Kordy\Ticketit\Middleware;

use \Closure;
use Kordy\Ticketit\Models\Agent;

class ResAccessMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Agent::isAdmin())
            return $next($request);

        // All Agents have access in none restricted mode
        if (config('ticketit.agent_restrict') == 'no')
            if (Agent::isAgent())
                return $next($request);

        // if this is a ticket show page
        if ($request->route()->getName() == config('ticketit.main_route').'.show')
            $ticket_id = $request->route(config('ticketit.main_route'));

        // if this is a new comment on a ticket
        if ($request->route()->getName() == config('ticketit.main_route').'-comment.store')
            $ticket_id = $request->get('ticket_id');

        // Assigned Agent has access in the restricted mode enabled
        if (Agent::isAgent() && Agent::isAssignedAgent($ticket_id))
            return $next($request);

        // Ticket Owner has access
        if (Agent::isTicketOwner($ticket_id))
            return $next($request);

        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index')
            ->with('warning', 'You are not permitted to access this page!');
    }

}