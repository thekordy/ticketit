@extends($master)

@section('page')
    {{ trans('ticketit::admin.index-title') }}	
@stop

@push('content')
    @include('ticketit::shared.header')
@endpush