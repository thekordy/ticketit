@extends($master)
@section('page', trans('ticketit::admin.category-create-title'))

@section('content')
    <div class="well bs-component">
        {!! Form::open(['route'=> $setting->grab('admin_route').'.category.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ trans('ticketit::admin.category-create-title') }}</legend>
            @include('ticketit::admin.category.form')
        {!! Form::close() !!}
    </div>
@stop
