@extends($master)

@section('content')
    @include('ticketit::shared.header')

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                @include('ticketit::shared.nav')
            </div>
        </div>
        <div class="card">
            <h5 class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
                <span>@yield('page')</span>
                @yield('ticketit_header')
            </h5>
            <div class="card-body">
                @yield('ticketit_content')
            </div>
        </div>
    </div>

@stop
