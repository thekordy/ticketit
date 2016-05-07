@extends(config('ticketit.views.standard.master'))

@section('title')
    | My Open Tickets
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('ticketit::standard.shared.nav')
            {{ $tickets }}
        </div>
    </div>
@endsection