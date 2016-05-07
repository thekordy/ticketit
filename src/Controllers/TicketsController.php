<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public $tickets;

    /**
     * Redirects to user's open tickets index page
     * 
     * @return mixed
     */
    public function index()
    {
        return redirect(route('ticketit.tickets.open'));
    }

    /**
     * Load the user open tickets index page
     * 
     * @return mixed
     */
    public function open()
    {
        $this->tickets = 'open tickets';
        
        return view('ticketit::standard.ticket.open', ['tickets' => $this->tickets]);
    }

    /**
     * Load ticket edit form
     * 
     * @return mixed
     */
    public function edit($id)
    {
        $this->tickets = 'edit ticket';
        
        return view('ticketit::standard.ticket.edit', ['ticket' => $this->tickets]);
    }
}