@extends($master)
@section('page', tkAdminTrans('category-create-title'))

@section('content')
    <div class="well bs-component">
        {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.category.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <legend>{{ tkAdminTrans('category-create-title') }}</legend>
            @include('ticketit::admin.category.form')
        {!! CollectiveForm::close() !!}
    </div>
@stop
