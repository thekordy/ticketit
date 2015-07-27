@extends($master)
@section('page', 'Edit '.$status->name.' status')

@section('content')
    <div class="well bs-component">
        @include('Ticketit::shared.flash')
        @include('Ticketit::shared.flash_error')
        {!! Form::model($status, [
                                    'route' => [config('ticketit.admin_route').'.status.update', $status->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>Edit {{ $status->name }}: </legend>
        @include('Ticketit::admin.status.form', ['update', true])
        {!! Form::close() !!}
    </div>
@stop