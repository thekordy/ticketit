<?php $notification_owner = unserialize($notification_owner); ?>
<?php $ticket = unserialize($ticket); ?>

<b>{{ $notification_owner->name }}</b> created new ticket <b>{{ $ticket->subject }}</b> ({{ $ticket->status->name }}) in
{{ $ticket->category->name }}, and it has been assigned to you.
<br>
<hr>
Go to {!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}
