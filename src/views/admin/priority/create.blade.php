@extends($master)
@section('page', 'Create a new priority')

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.priority.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Priority</legend>
            @include('ticketit::admin.priority.form')
        {!! Form::close() !!}
    </div>
@stop