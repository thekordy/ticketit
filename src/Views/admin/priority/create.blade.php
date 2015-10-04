@extends($master)
@section('page', trans('ticketit::admin.priority-create-title'))

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.priority.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('ticketit::admin.priority-create-title') }}</legend>
            @include('ticketit::admin.priority.form')
        {!! Form::close() !!}
    </div>
@stop