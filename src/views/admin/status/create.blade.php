@extends($master)
@section('page', 'Create a new status')

@section('content')
    <div class="well bs-component">
        @include('Ticketit::shared.flash_error')
        {!! Form::open(['route'=> config('ticketit.admin_route').'.status.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Status</legend>
            @include('Ticketit::admin.status.form')
        {!! Form::close() !!}
    </div>
@stop