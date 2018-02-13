@extends($master)

@section('content')
    @include('ticketit::shared.header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                @include('ticketit::shared.nav')
                @yield('ticketit_header')
            </div>
            <div class="card-body">
                <h4 class="card-title">@yield('page')</h4>
                @yield('ticketit_content')
            </div>
        </div>
    </div>

@stop
