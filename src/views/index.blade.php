@extends($master)

@section('page')
    Helpdesk main page
@stop

@section('content')
    <div class="row">
    @include('Ticketit::nav')
        @include('Ticketit::tickets.index')
    </div>

@stop