<!-- Removing the unserialize methods on this template resolves errors. No known issues.
Outbound status works fine even with unserialize removed. The other views need them for some
reason -->

@extends($email)

@section('subject')
	{{ trans('ticketit::email/globals.status') }}
@stop

@section('link')
	<a style="color:#ffffff" href="{{ route(config('ticketit.main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/globals.view-ticket') }}
	</a>
@stop

@section('content')
	{!! trans('ticketit::email/status.data', [
	    'name'        =>  $notification_owner->name,
	    'subject'     =>  $ticket->subject,
	    'old_status'  =>  $original_ticket->status->name,
	    'new_status'  =>  $ticket->status->name
	]) !!}
@stop