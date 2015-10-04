@extends($master)

@section('page')
    {{ trans('ticketit::lang.index-title') }}
@stop

@section('content')
    <div class="row">
        @include('ticketit::shared.header')
        @include('ticketit::tickets.index')
    </div>
@stop
