@extends('master')
@section('title', 'Edit a ticket')

@section('content')
        <div class="well bs-component">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h1>Edit {{ $ticket->title }}</h1>
            {!! Form::model($ticket, ['route' => ['ticket.update', $ticket->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                @include('partials.ticketform', ["ticket_status" => ['show' => true, 'value' => $ticket->status]])
            {!! Form::close() !!}
        </div>
@stop

