@extends($master)
@section('page', tkAdminTrans('priority-create-title'))

@section('content')
    @include('ticketit::shared.header')
    <div class="well bs-component">
        {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.priority.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ tkAdminTrans('priority-create-title') }}</legend>
            @include('ticketit::admin.priority.form')
        {!! CollectiveForm::close() !!}
    </div>
@stop
