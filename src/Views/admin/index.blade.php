@extends($master)

@section('page')
    {{ trans('ticketit::admin.index-title') }}	
@stop

@section('content')
    @include('ticketit::shared.admin-header')
@stop