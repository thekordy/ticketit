<?php $notification_owner = unserialize($notification_owner); ?>		
<?php $ticket = unserialize($ticket); ?>		
<?php $original_ticket = unserialize($original_ticket); ?>

@extends($email)

@section('subject')
	{{ trans('ticketit::email/template.transfer') }}
@stop

@section('link')
	<a style="color:#ffffff" href="{{ route(config('ticketit.main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/template.view-ticket') }}
	</a>
@stop

@section('content')
	{!! trans('ticketit::email/transfer_notification.data', [
	    'name'          =>  $notification_owner->name,
	    'subject'       =>  $ticket->subject,
	    'status'        =>  $ticket->status->name,
	    'agent'         =>  $original_ticket->agent->name,
	    'old_category'  =>  $original_ticket->category->name, 
	    'new_category'  =>  $ticket->category->name
	]) !!}
@stop