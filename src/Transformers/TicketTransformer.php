<?php
namespace Kordy\Ticketit\Transformers;

use Kordy\Ticketit\Models\Ticket;
use League\Fractal;
use League\Fractal\TransformerAbstract;

class TicketTransformer extends TransformerAbstract
{
	public function transform(Ticket $ticket)
	{
	    return [
	        'id' => $ticket->id, 
	        'subject' => $ticket->subject,
	        'status_id' => $ticket->status->name,
	        'updated_at' => $ticket->updated_at->format('n/j/Y g:ia'),
	        'priority_id' => $ticket->priority->name,
	        'agent_id' => $ticket->agent->name,
	        'category_id' => $ticket->category->name,
	    ];
	}
}