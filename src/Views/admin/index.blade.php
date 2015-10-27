@extends($master)

@section('page')
    {{ trans('ticketit::admin.index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="row">
        <div class="col-lg-3 col-md-4 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3" style="font-size: 5em;">
                            <i class="glyphicon glyphicon-th"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>{{ $tickets_count }}</h1>
                            <div>Total Tickets</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3" style="font-size: 5em;">
                            <i class="glyphicon glyphicon-wrench"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>{{ $open_tickets_count }}</h1>
                            <div>Open Tickets</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3" style="font-size: 5em;">
                            <i class="glyphicon glyphicon-thumbs-up"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>{{ $closed_tickets_count }}</h1>
                            <span>Closed Tickets</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Performance Indicator
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Periods
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="{{ route('dashboard.indicator', 2) }}">3 months</a></li>
                                <li><a href="{{ route('dashboard.indicator', 5) }}">6 months</a></li>
                                <li><a href="{{ route('dashboard.indicator', 11) }}">12 months</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="curve_chart" style="width: 100%; height: 350px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Categories tickets share
                        </div>
                        <div class="panel-body">
                            <div id="catpiechart" style="width: auto; height: 350;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agents tickets share
                        </div>
                        <div class="panel-body">
                            <div id="agentspiechart" style="width: auto; height: 350;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            {{--<h4><i class="glyphicon glyphicon-info-sign"></i> Tickets Activities</h4>--}}
            {{--<hr />--}}
            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a data-toggle="pill" href="#information-panel-categories">
                        <i class="glyphicon glyphicon-folder-close"></i> <small>Categories</small>
                    </a>
                </li>
                <li>
                    <a data-toggle="pill" href="#information-panel-agents">
                        <i class="glyphicon glyphicon-user"></i> <small>Agents</small>
                    </a>
                </li>
                <li>
                    <a data-toggle="pill" href="#information-panel-users">
                        <i class="glyphicon glyphicon-user"></i> <small>Users</small>
                    </a>
                </li>
            </ul>
            <br>
            <div class="tab-content">
                <div id="information-panel-categories" class="list-group tab-pane fade in active">
                    <a href="#" class="list-group-item disabled">
                        <span>Category <span class="badge">Total</span></span>
                        <span class="pull-right text-muted small">
                            <em>Open / Closed</em>
                        </span>
                    </a>
                    @foreach($categories as $category)
                        <a href="#" class="list-group-item">
                    <span style="color: {{ $category->color }}">
                        {{ $category->name }} <span class="badge">{{ $category->tickets()->count() }}</span>
                    </span>
                    <span class="pull-right text-muted small">
                        <em>
                            {{ $category->tickets()->whereNull('completed_at')->count() }} /
                             {{ $category->tickets()->whereNotNull('completed_at')->count() }}
                        </em>
                    </span>
                        </a>
                    @endforeach
                    {!! $categories->render() !!}
                </div>
                <div id="information-panel-agents" class="list-group tab-pane fade">
                    <a href="#" class="list-group-item disabled">
                        <span>Agent <span class="badge">Total</span></span>
                        <span class="pull-right text-muted small">
                            <em>Open / Closed</em>
                        </span>
                    </a>
                    @foreach($agents as $agent)
                        <a href="#" class="list-group-item">
                            <span>
                                {{ $agent->name }}
                                <span class="badge">
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
                    {!! $agents->render() !!}
                </div>
                <div id="information-panel-users" class="list-group tab-pane fade">
                    <a href="#" class="list-group-item disabled">
                        <span>Ticket Owner <span class="badge">Total</span></span>
                        <span class="pull-right text-muted small">
                            <em>Open / Closed</em>
                        </span>
                    </a>
                    @foreach($users as $user)
                        <a href="#" class="list-group-item">
                            <span>
                                {{ $user->name }}
                                <span class="badge">
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
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
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
                @foreach($monthly_performance as $google_data_arr)
                    @if($google_data_arr != end($monthly_performance))
                        [{!! implode(',', $google_data_arr) !!}],
                    @else
                        [{!! implode(',', $google_data_arr) !!}]
                    @endif
                @endforeach
            ]);

            var options = {
                title: 'How many days in average to resolve a ticket?',
                curveType: 'function',
                legend: {position: 'right'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);

            // Categories Pie Chart
            var cat_data = google.visualization.arrayToDataTable([
              ['Category', 'Tickets'],
              @foreach($categories_share as $cat_name => $cat_tickets)
                  @if($cat_tickets != end($categories_share))
                      ['{{ $cat_name }}', {{ $cat_tickets }}],
                  @else
                      ['{{ $cat_name }}', {{ $cat_tickets }}]
                  @endif
              @endforeach
            ]);

            var cat_options = {
              title: 'Tickets distribution per category',
              legend: {position: 'bottom'}
            };

            var cat_chart = new google.visualization.PieChart(document.getElementById('catpiechart'));

            cat_chart.draw(cat_data, cat_options);

            // Agents Pie Chart
            var agent_data = google.visualization.arrayToDataTable([
              ['Agent', 'Assigned Tickets'],
              @foreach($agents_share as $agent_name => $agent_tickets)
                  @if($agent_tickets != end($agents_share))
                      ['{{ $agent_name }}', {{ $agent_tickets }}],
                  @else
                      ['{{ $agent_name }}', {{ $agent_tickets }}]
                  @endif
              @endforeach
            ]);

            var agent_options = {
              title: 'Tickets distribution per Agent',
              legend: {position: 'bottom'}
            };

            var agent_chart = new google.visualization.PieChart(document.getElementById('agentspiechart'));

            agent_chart.draw(agent_data, agent_options);

        }
    </script>
@stop
