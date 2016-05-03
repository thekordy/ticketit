@extends(config('ticketit.views.front-master'))

@section('title')
    | My Active Tickets
@endsection

@section('content')
    <div class="container">
        <div class="row">
            {{ $tickets }}
        </div>
    </div>
@endsection