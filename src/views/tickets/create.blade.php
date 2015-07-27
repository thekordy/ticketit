@extends('master')
@section('title', 'New Ticket Form')

@section('content')
            <div class="well bs-component">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                {!! Form::open(['action'=>'TicketsController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    <legend>Create New Ticket</legend>
                    @include('partials.ticketform', ["ticket_status" => ['show' => false, 'value' => '']])
                {!! Form::close() !!}
            </div>
@stop