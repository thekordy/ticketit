<?php

namespace Kordy\Ticketit\Services;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthorizeMiddleware
{

    /**
     * Check user authorization by ability name which is passed as parameter or
     * if parameter is not present to be assumed as the routes name, or if 
     * route name is not present to be calculated as the Class{@}action
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param string $ability
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $ability = null)
    {
        if (Auth::check() && $request->user()->can($ability ?: $this->requestedAbility($request), $request)) {
            return $next($request);
        }
        // TODO make abort 403 action configurable
        abort(403);

    }

    /**
     * return route name or controller{@}action (Path\Controller{@}method) if route name is not present
     *
     * @param Request $request
     * @return string
     */
    protected function requestedAbility(Request $request)
    {
        // TODO make sure action path works with paths like \Kordy\Ticketit\Controllers\SomeController@method
        $action_path = explode('\\', $request->route()->getActionName());
        return $request->route()->getName() ?: end($action_path);
    }
}