@extends($master)
@section('page', 'Create a new category')

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::open(['route'=> config('ticketit.admin_route').'.category.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>Create New Category</legend>
            @include('ticketit::admin.category.form')
        {!! Form::close() !!}
    </div>
@stop