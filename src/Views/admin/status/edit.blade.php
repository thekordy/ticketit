@extends($master)
@section('page', trans('ticketit::admin.status_edit_title', ['name' => ucwords($status->name)]))

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="well bs-component">
        {!! Form::model($status, [
                                    'route' => [config('ticketit.admin_route').'.status.update', $status->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>{{ trans('ticketit::admin.status_edit_title', ['name' => ucwords($status->name)]) }}</legend>
        @include('ticketit::admin.status.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop