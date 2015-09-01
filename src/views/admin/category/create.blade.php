@extends($master)
@section('page', 'Create a new category')

@section('content')
    <div class="well bs-component">
        @include('ticketit::shared.flash_error')
        {!! Form::open(['route'=> config('ticketit.admin_route').'.category.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Category</legend>
            @include('ticketit::admin.category.form')
        {!! Form::close() !!}
    </div>
@stop