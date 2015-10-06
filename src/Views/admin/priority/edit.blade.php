@extends($master)
@section('page', trans('ticketit::admin.priority-edit-title', ['name' => ucwords($priority->name)]))

@section('content')
    @include('ticketit::shared.header')
    <div class="well bs-component">
        {!! Form::model($priority, [
                                    'route' => [config('ticketit.admin_route').'.priority.update', $priority->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>{{ trans('ticketit::admin.priority-edit-title', ['name' => ucwords($priority->name)]) }}</legend>
        @include('ticketit::admin.priority.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop