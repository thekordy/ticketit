@extends($master)
@section('page', 'Create a new status')

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.status.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Status</legend>
            @include('ticketit::admin.status.form')
        {!! Form::close() !!}
    </div>
@stop