<?php

namespace Kordy\Ticketit\Middleware;

use Closure;
use Kordy\Ticketit\Models\Agent;

class IsAgentMiddleware
{
    /**
     * Run the request filter.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Agent::isAgent() || Agent::isAdmin()) {
            return $next($request);
        }

        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index')
            ->with('warning', trans('ticketit::lang.you-are-not-permitted-to-access'));
    }
}
