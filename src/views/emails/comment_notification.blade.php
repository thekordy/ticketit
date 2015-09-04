<!DOCTYPE html>
<html lang=&quot;en-US&quot;>
<head>
    <meta charset=&quot;utf-8&quot;>
</head>
<body>
<b>{{ $comment->user->name }}</b> has commented on the ticket <b>{{ $ticket->subject }}</b> ({{ $ticket->status->name }}):
<br>
<br>
<div>{{ $comment->content }}</div>
<br>
<hr>
Go to {!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}
</body>
</html>