@extends($master)
@section('page', tkAdminTrans('status-edit-title', ['name' => ucwords($status->name)]))

@section('content')
    @include('ticketit::shared.header')
    <div class="well bs-component">
        {!! CollectiveForm::model($status, [
                                    'route' => [$setting->grab('admin_route').'.status.update', $status->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>{{ tkAdminTrans('status-edit-title', ['name' => ucwords($status->name)]) }}</legend>
        @include('ticketit::admin.status.form', ['update', true])
        {!! CollectiveForm::close() !!}
    </div>
@stop
