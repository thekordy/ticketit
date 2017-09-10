@extends($master)
@section('page', tkAdminTrans('priority-edit-title', ['name' => ucwords($priority->name)]))

@section('content')
    @include('ticketit::shared.header')
    <div class="well bs-component">
        {!! CollectiveForm::model($priority, [
                                    'route' => [$setting->grab('admin_route').'.priority.update', $priority->id],
                                    'method' => 'PATCH',
                                    'class' => 'form-horizontal'
                                    ]) !!}
        <legend>{{ tkAdminTrans('priority-edit-title', ['name' => ucwords($priority->name)]) }}</legend>
        @include('ticketit::admin.priority.form', ['update', true])
        {!! CollectiveForm::close() !!}
    </div>
@stop
