@extends($master)
@section('page', trans('ticketit::admin.status-create-title'))

@section('content')
    @include('ticketit::shared.header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.status.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('ticketit::admin.status-create-title') }}</legend>
            @include('ticketit::admin.status.form')
        {!! Form::close() !!}
    </div>
@stop