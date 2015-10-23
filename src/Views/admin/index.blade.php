@extends($master)

@section('page')
    {{ trans('ticketit::admin.index-title') }}	
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="row">
        <div class="col-lg-3 col-md-4">
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
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                </div>
                <div class="panel-body">
                    <div id="curve_chart" style="width: 100%; height: auto"></div>
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
                        <i class="glyphicon glyphicon-user"></i> <small>users</small>
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
                    @foreach($tools->sortArray( $categories_count, 'total', $type = 'desc' ) as $category_name => $category_counts)
                        <a href="#" class="list-group-item">
                    <span style="color: {{ $category_counts['color'] }}">
                        {{ $category_name }} <span class="badge">{{ $category_counts['total'] }}</span>
                    </span>
                    <span class="pull-right text-muted small">
                        <em>
                            {{ $category_counts['open'] }} / {{ $category_counts['closed'] }}
                        </em>
                    </span>
                        </a>
                    @endforeach
                </div>
                <div id="information-panel-agents" class="list-group tab-pane fade">
                    <a href="#" class="list-group-item disabled">
                        <span>Agent <span class="badge">Total</span></span>
                        <span class="pull-right text-muted small">
                            <em>Open / Closed</em>
                        </span>
                    </a>
                    @foreach($tools->sortArray( $agents_count, 'total', $type = 'desc' ) as $agent_name => $agent_counts)
                        <a href="#" class="list-group-item">
                            <span>
                                {{ $agent_name }} <span class="badge">{{ $agent_counts['total'] }}</span>
                            </span>
                            <span class="pull-right text-muted small">
                                <em>
                                    {{ $agent_counts['open'] }} / {{ $agent_counts['closed'] }}
                                </em>
                            </span>
                        </a>
                    @endforeach
                </div>
                <div id="information-panel-users" class="list-group tab-pane fade">
                    <a href="#" class="list-group-item disabled">
                        <span>Ticket Owner <span class="badge">Total</span></span>
                        <span class="pull-right text-muted small">
                            <em>Open / Closed</em>
                        </span>
                    </a>
                    @foreach($tools->sortArray( $users_count, 'total', $type = 'desc' ) as $user_name => $user_counts)
                        <a href="#" class="list-group-item">
                            <span>
                                {{ $user_name }} <span class="badge">{{ $user_counts['total'] }}</span>
                            </span>
                            <span class="pull-right text-muted small">
                                <em>
                                    {{ $user_counts['open'] }} / {{ $user_counts['closed'] }}
                                </em>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
    @include('ticketit::shared.footer')
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

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
@stop