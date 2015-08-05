@extends('master')
@section('page', 'Ticket: '. $ticket->subject)
@section('content')
        @include('Ticketit::nav')
        @include('Ticketit::tickets.partials.ticket_body')
        {{--@include('Ticketit::tickets.partials.comments')--}}
        {{--@include('Ticketit::tickets.partials.comment_form')--}}

@endsection