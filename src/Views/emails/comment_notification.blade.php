<?php $comment = unserialize($comment); ?>		
<?php $ticket = unserialize($ticket); ?>

@extends($email)

@section('subject')
	{{ trans('ticketit::email/template.comment') }}
@stop

@section('link')
	<a style="color:#ffffff" href="{{ route(config('ticketit.main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/template.view-ticket') }}
	</a>
@stop

@section('content')
	{!! trans('ticketit::email/comment_notification.data', [
	    'name'      =>  $comment->user->name,
	    'subject'   =>  $ticket->subject,
	    'status'    =>  $ticket->status->name,
	    'category'  =>  $ticket->category->name,
	    'comment'   =>  $comment->content
	]) !!}
@stop