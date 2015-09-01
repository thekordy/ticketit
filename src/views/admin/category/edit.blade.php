@extends($master)
@section('page', 'Edit '.$category->name.' category')

@section('content')
    <div class="well bs-component">
        @include('ticketit::shared.flash')
        @include('ticketit::shared.flash_error')
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