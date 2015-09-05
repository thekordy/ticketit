<?php $notification_owner = unserialize($notification_owner); ?>
<?php $ticket = unserialize($ticket); ?>
<?php $original_ticket = unserialize($original_ticket); ?>

<b>{{ $notification_owner->name }}</b> has transferred the ticket <b>{{ $ticket->subject }}</b> ({{ $ticket->status->name }})
from {{ $original_ticket->agent->name }} in {{ $original_ticket->category->name }} to you in {{ $ticket->category->name }}
<br>
<hr>
Go to {!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}
