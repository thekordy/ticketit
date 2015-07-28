@extends($master)
@section('page', 'Create a new priority')

@section('content')
    <div class="well bs-component">
        @include('Ticketit::shared.flash_error')
        {!! Form::open(['route'=> config('ticketit.admin_route').'.priority.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Priority</legend>
            @include('Ticketit::admin.priority.form')
        {!! Form::close() !!}
    </div>
@stop