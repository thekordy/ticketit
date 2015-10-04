<?php $notification_owner = unserialize($notification_owner); ?>
<?php $ticket = unserialize($ticket); ?>
<?php $original_ticket = unserialize($original_ticket); ?>

{!! trans('lang::email/transfer_notification.data', [
    'name'          =>  $notification_owner->name,
    'subject'       =>  $ticket->subject,
    'status'        =>  $ticket->status->name,
    'agent'         =>  $original_ticket->agent->name,
    'old_category'  =>  $original_ticket->category->name, 
    'new_category'  =>  $ticket->category->name
]) !!}

{!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}