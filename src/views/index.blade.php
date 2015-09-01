@extends($master)

@section('page')
    Helpdesk main page
@stop

@section('content')
    <div class="row">
    @include('ticketit::nav')
        @include('ticketit::tickets.index')
    </div>

@stop