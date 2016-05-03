<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public $tickets;

    /**
     * Load the user active tickets index page
     * 
     * @return mixed
     */
    public function index()
    {
        $this->tickets = 'tickets index';
        
        return view('ticketit::ticket.index.user.active', ['tickets' => $this->tickets]);
    }
}