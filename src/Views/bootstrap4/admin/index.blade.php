@extends('ticketit::layouts.master')

@section('page', trans('ticketit::admin.index-title'))

@section('ticketit_extra_content')
    @if($tickets_count)
        <div class="card-deck mb-3">
            <div class="card bg-light">
                <div class="card-body row d-flex align-items-center">
                    <div class="col-3" style="font-size: 5em;">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="col-9 text-right">
                        <h1>{{ $tickets_count }}</h1>
                        <div>{{ trans('ticketit::admin.index-total-tickets') }}</div>
                    </div>
                </div>
            </div>

            <div class="card bg-danger">
                <div class="card-body row d-flex align-items-center">
                    <div class="col-3" style="font-size: 5em;">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="col-9 text-right">
                        <h1>{{ $open_tickets_count }}</h1>
                        <div>{{ trans('ticketit::admin.index-open-tickets') }}</div>
                    </div>
                </div>
            </div>

            <div class="card bg-success">
                <div class="card-body row d-flex align-items-center">
                    <div class="col-3" style="font-size: 5em;">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="col-9 text-right">
                        <h1>{{ $closed_tickets_count }}</h1>
                        <span>{{ trans('ticketit::admin.index-closed-tickets') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-8 mt-3">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between align-items-baseline flex-wrap">
                        <div><i class="fas fa-chart-bar fa-fw"></i> {{ trans('ticketit::admin.index-performance-indicator') }}</div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                {{ trans('ticketit::admin.index-periods') }}
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index', 2) }}">
                                    {{ trans('ticketit::admin.index-3-months') }}
                                </a>
                                <a class="dropdown-item" href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index', 5) }}">
                                    {{ trans('ticketit::admin.index-6-months') }}
                                </a>
                                <a class="dropdown-item" href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index', 11) }}">
                                    {{ trans('ticketit::admin.index-12-months') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="curve_chart" style="width: 100%; height: 350px"></div>
                    </div>
                </div>
                <div class="card-deck mt-3">
                    <div class="card ">
                        <div class="card-header">
                            {{ trans('ticketit::admin.index-tickets-share-per-category') }}
                        </div>
                        <div class="panel-body">
                            <div id="catpiechart" style="width: auto; height: 350;"></div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header">
                            {{ trans('ticketit::admin.index-tickets-share-per-agent') }}
                        </div>
                        <div class="panel-body">
                            <div id="agentspiechart" style="width: auto; height: 350;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <nav>
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link {{$active_tab == "cat" ? "active" : ""}}" data-toggle="pill" href="#information-panel-categories">
                                <i class="fas fa-folder"></i>
                                <small>{{ trans('ticketit::admin.index-categories') }}</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$active_tab == "agents" ? "active"  : ""}}" data-toggle="pill" href="#information-panel-agents">
                                <i class="fas fa-user-secret"></i>
                                <small>{{ trans('ticketit::admin.index-agents') }}</small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$active_tab == "users" ? "active" : ""}}" data-toggle="pill" href="#information-panel-users">
                                <i class="fas fa-users"></i>
                                <small>{{ trans('ticketit::admin.index-users') }}</small>
                            </a>
                        </li>
                    </ul>
                </nav>
                <br>
                <div class="tab-content">
                    <div id="information-panel-categories" class="list-group tab-pane fade {{$active_tab == "cat" ? "show active" : ""}}">
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <span>{{ trans('ticketit::admin.index-category') }}
                                <span class="badge badge-pill badge-secondary">{{ trans('ticketit::admin.index-total') }}</span>
                            </span>
                            <small class="pull-right text-muted">
                                <em>
                                    {{ trans('ticketit::admin.index-open') }} /
                                     {{ trans('ticketit::admin.index-closed') }}
                                </em>
                            </small>
                        </a>
                        @foreach($categories as $category)
                            <a href="#" class="list-group-item list-group-item-action">
                        <span style="color: {{ $category->color }}">
                            {{ $category->name }} <span class="badge badge-pill badge-secondary">{{ $category->tickets()->count() }}</span>
                        </span>
                        <span class="pull-right text-muted small">
                            <em>
                                {{ $category->tickets()->whereNull('completed_at')->count() }} /
                                 {{ $category->tickets()->whereNotNull('completed_at')->count() }}
                            </em>
                        </span>
                            </a>
                        @endforeach
                        {!! $categories->render("pagination::bootstrap-4") !!}
                    </div>
                    <div id="information-panel-agents" class="list-group tab-pane fade {{$active_tab == "agents" ? "show active" : ""}}">
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <span>{{ trans('ticketit::admin.index-agent') }}
                                <span class="badge badge-pill badge-secondary">{{ trans('ticketit::admin.index-total') }}</span>
                            </span>
                            <span class="pull-right text-muted small">
                                <em>
                                    {{ trans('ticketit::admin.index-open') }} /
                                    {{ trans('ticketit::admin.index-closed') }}
                                </em>
                            </span>
                        </a>
                        @foreach($agents as $agent)
                            <a href="#" class="list-group-item list-group-item-action">
                                <span>
                                    {{ $agent->name }}
                                    <span class="badge badge-pill badge-secondary">
                                        {{ $agent->agentTickets(false)->count()  +
                                         $agent->agentTickets(true)->count() }}
                                    </span>
                                </span>
                                <span class="pull-right text-muted small">
                                    <em>
                                        {{ $agent->agentTickets(false)->count() }} /
                                         {{ $agent->agentTickets(true)->count() }}
                                    </em>
                                </span>
                            </a>
                        @endforeach
                        {!! $agents->render("pagination::bootstrap-4") !!}
                    </div>
                    <div id="information-panel-users" class="list-group tab-pane fade {{$active_tab == "users" ? "show active" : ""}}">
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <span>{{ trans('ticketit::admin.index-user') }}
                                <span class="badge badge-pill badge-secondary">{{ trans('ticketit::admin.index-total') }}</span>
                            </span>
                            <span class="pull-right text-muted small">
                                <em>
                                    {{ trans('ticketit::admin.index-open') }} /
                                    {{ trans('ticketit::admin.index-closed') }}
                                </em>
                            </span>
                        </a>
                        @foreach($users as $user)
                            <a href="#" class="list-group-item list-group-item-action">
                                <span>
                                    {{ $user->name }}
                                    <span class="badge badge-pill badge-secondary">
                                        {{ $user->userTickets(false)->count()  +
                                         $user->userTickets(true)->count() }}
                                    </span>
                                </span>
                                <span class="pull-right text-muted small">
                                    <em>
                                        {{ $user->userTickets(false)->count() }} /
                                        {{ $user->userTickets(true)->count() }}
                                    </em>
                                </span>
                            </a>
                        @endforeach
                        {!! $users->render("pagination::bootstrap-4") !!}
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card text-center">
            {{ trans('ticketit::admin.index-empty-records') }}
        </div>
    @endif
@stop
@section('footer')
    @if($tickets_count)
    {{--@include('ticketit::shared.footer')--}}
    <script type="text/javascript"
            src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

    <script type="text/javascript">
        google.setOnLoadCallback(drawChart);

        // performance line chart
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["{{ trans('ticketit::admin.index-month') }}", "{!! implode('", "', $monthly_performance['categories']) !!}"],
                @foreach($monthly_performance['interval'] as $month => $records)
                    ["{{ $month }}", {!! implode(',', $records) !!}],
                @endforeach
            ]);

            var options = {
                title: '{!! addslashes(trans('ticketit::admin.index-performance-chart')) !!}',
                curveType: 'function',
                legend: {position: 'right'},
                vAxis: {
                    viewWindowMode:'explicit',
                    format: '#',
                    viewWindow:{
                        min:0
                    }
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);

            // Categories Pie Chart
            var cat_data = google.visualization.arrayToDataTable([
              ['{{ trans('ticketit::admin.index-category') }}', '{!! addslashes(trans('ticketit::admin.index-tickets')) !!}'],
              @foreach($categories_share as $cat_name => $cat_tickets)
                    ['{!! addslashes($cat_name) !!}', {{ $cat_tickets }}],
              @endforeach
            ]);

            var cat_options = {
              title: '{!! addslashes(trans('ticketit::admin.index-categories-chart')) !!}',
              legend: {position: 'bottom'}
            };

            var cat_chart = new google.visualization.PieChart(document.getElementById('catpiechart'));

            cat_chart.draw(cat_data, cat_options);

            // Agents Pie Chart
            var agent_data = google.visualization.arrayToDataTable([
              ['{{ trans('ticketit::admin.index-agent') }}', '{!! addslashes(trans('ticketit::admin.index-tickets')) !!}'],
              @foreach($agents_share as $agent_name => $agent_tickets)
                    ['{!! addslashes($agent_name) !!}', {{ $agent_tickets }}],
              @endforeach
            ]);

            var agent_options = {
              title: '{!! addslashes(trans('ticketit::admin.index-agents-chart')) !!}',
              legend: {position: 'bottom'}
            };

            var agent_chart = new google.visualization.PieChart(document.getElementById('agentspiechart'));

            agent_chart.draw(agent_data, agent_options);

        }
    </script>
    @endif
@append
