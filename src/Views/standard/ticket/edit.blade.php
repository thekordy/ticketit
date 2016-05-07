@extends(config('ticketit.views.standard.master'))

@section('title')
    | Edit Ticket
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('ticketit::standard.shared.nav')
            {{ $ticket }}
        </div>
    </div>
@endsection