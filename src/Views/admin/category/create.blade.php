@extends($master)
@section('page', trans('ticketit::admin.category-create-title'))

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.category.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('ticketit::admin.category-create-title') }}</legend>
            @include('ticketit::admin.category.form')
        {!! Form::close() !!}
    </div>
@stop