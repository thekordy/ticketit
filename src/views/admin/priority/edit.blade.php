@extends($master)
@section('page', 'Edit '.$priority->name.' priority')

@section('content')
    <div class="well bs-component">
        @include('Ticketit::shared.flash')
        @include('Ticketit::shared.flash_error')
        {!! Form::model($priority, [
                                    'route' => [config('ticketit.admin_route').'.priority.update', $priority->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>Edit {{ $priority->name }}: </legend>
        @include('Ticketit::admin.priority.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop