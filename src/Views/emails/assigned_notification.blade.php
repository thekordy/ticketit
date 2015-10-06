<?php $notification_owner = unserialize($notification_owner); ?>		
<?php $ticket = unserialize($ticket); ?>

@extends($email)

@section('subject')
	{{ trans('ticketit::email/template.assigned') }}
@stop

@section('link')
	<a style="color:#ffffff" href="{{ route(config('ticketit.main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/template.view-ticket') }}
	</a>
@stop

@section('content')
	{!! trans('ticketit::email/assigned_notification.data', [
		'name'      =>  $notification_owner->name,
		'subject'   =>  $ticket->subject,
		'status'    =>  $ticket->status->name,
		'category'  =>  $ticket->category->name
	]) !!}
@stop