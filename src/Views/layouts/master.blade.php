@extends($master)

@section('content')
    @include('ticketit::shared.header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                @include('ticketit::shared.nav')
                
            </div>
            <div class="card-body">
                <h4 class="card-title d-flex justify-content-between align-items-baseline"><span>@yield('page')</span> @yield('ticketit_header')</h4>

                @yield('ticketit_content')
            </div>
        </div>
    </div>

@stop
