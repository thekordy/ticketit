@extends($master)
@section('page', 'Edit '.$priority->name.' priority')

@section('content')
    <div class="well bs-component">
        @include('ticketit::shared.flash')
        @include('ticketit::shared.flash_error')
        {!! Form::model($priority, [
                                    'route' => [config('ticketit.admin_route').'.priority.update', $priority->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>Edit {{ $priority->name }}: </legend>
        @include('ticketit::admin.priority.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop