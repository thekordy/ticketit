<?php $comment = unserialize($comment); ?>
<?php $ticket = unserialize($ticket); ?>

{!! trans('ticketit::email/comment_notification.data', [
    'name'      =>  $comment->user->name,
    'subject'   =>  $ticket->subject,
    'status'    =>  $ticket->status->name,
    'category'  =>  $ticket->category->name,
    'comment'   =>  $comment->content
]) !!}

{!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}