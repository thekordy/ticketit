@extends($master)
@section('page', trans('ticketit::admin.status_create_title'))

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.status.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('ticketit::admin.status_create_title') }}</legend>
            @include('ticketit::admin.status.form')
        {!! Form::close() !!}
    </div>
@stop