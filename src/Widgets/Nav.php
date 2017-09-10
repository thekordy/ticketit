<?php

namespace Kordy\Ticketit\Widgets;

use Kordy\Ticketit\Models\Ticket;

class Nav
{
    public $template = 'ticketit::shared.nav';

    public $cacheLifeTime = 0;

    public function data($uid, $admin_route)
    {
        $agent = Agent::find($uid);

        if ($agent->isAdmin()) {
            $active = Ticket::active()->count();
            $complete  = Ticket::complete()->count();
        } elseif ($agent->isAgent()) {
            $active = Ticket::active()->agentUserTickets($uid)->count();
            $complete = Ticket::complete()->agentUserTickets($uid)->count();
        } else {
            $active = Ticket::userTickets($uid)->active()->count();
            $complete = Ticket::userTickets($uid)->complete()->count();
        }

        return compact('active','complete', 'admin_route');
    }
}