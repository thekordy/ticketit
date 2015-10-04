<?php $notification_owner = unserialize($notification_owner); ?>
<?php $ticket = unserialize($ticket); ?>

{!! trans('lang::email/assigned_notification.data', [
    'name'      =>  $notification_owner->name,
    'subject'   =>  $ticket->subject,
    'status'    =>  $ticket->status->name,
    'category'  =>  $ticket->category->name
]) !!}

{!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}