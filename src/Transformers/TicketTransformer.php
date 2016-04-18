<?php

namespace Kordy\Ticketit\Transformers;

use League\Fractal;
use Kordy\Ticketit\Models\Ticket;
use Kordy\Ticketit\Models\Setting;

class TicketTransformer extends Fractal\TransformerAbstract
{
    public function transform(Ticket $ticket)
    {
        $rules = array();

        $rules['id'] = (int)$ticket->id;

        $rules['subject'] = (string)link_to_route(
            Setting::grab('main_route') . '.show',
            $ticket->subject,
            $ticket->id
        );

        $color = $ticket->color_status;
        $status = e($ticket->status);
        $rules['status'] = "<div style='color: $color'>$status</div>";

        $color = $ticket->color_priority;
        $priority = e($ticket->priority);
        $rules['priority'] = "<div style='color: $color'>$priority</div>";

        $color = $ticket->color_category;
        $category = e($ticket->category);
        $rules['category'] = "<div style='color: $color'>$category</div>";

        $rules['agent_name'] = e($ticket->agent_name);

        $rules['owner'] = e($ticket->owner);

        $rules['updated_at'] = $ticket->updated_at->diffForHumans();

        return $rules;
    }
}