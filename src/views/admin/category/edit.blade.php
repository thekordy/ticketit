@extends($master)
@section('page', 'Edit '.$category->name.' category')

@section('content')
    <div class="well bs-component">
        @include('Ticketit::shared.flash')
        @include('Ticketit::shared.flash_error')
        {!! Form::model($category, [
                                    'route' => [config('ticketit.admin_route').'.category.update', $category->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>Edit {{ $category->name }}: </legend>
        @include('Ticketit::admin.category.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop