@extends($master)
@section('page', 'Edit '.$category->name.' category')

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::model($category, [
                                    'route' => [config('ticketit.admin_route').'.category.update', $category->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>Edit {{ $category->name }}: </legend>
        @include('ticketit::admin.category.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop