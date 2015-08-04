@extends($master)

@section('page')
    Helpdesk main page
@stop

@section('content')
    <h2>Tickets index</h2>
    <div class="row">
    @include('Ticketit::nav')
        @include('Ticketit::tickets.index')
    </div>

@stop