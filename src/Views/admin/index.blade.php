@extends($master)

@section('page')
    {{ trans('ticketit::admin.index-title') }}	
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="row">
        <div class="col-lg-3 col-md-6">
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
        <div class="col-lg-3 col-md-6">
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
        <div class="col-lg-3 col-md-6">
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
    @foreach($categories_count as $category_name => $category_counts)
        <div class="col-lg-2 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background-color: {{ $category_counts['color'] }}">
                    <div class="row">
                        <div class="col-xs-6 text-right">
                            <h1> {{ $category_counts['open'] }} </h1>
                            <div>Open</div>
                        </div>
                        <div class="col-xs-6" style="border-left: 4px solid #FFFFFF">
                            <h1>{{ $category_counts['closed'] }}</h1>
                            <div>Closed</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                    {{ $category_name }}
                </div>
            </div>
        </div>
    @endforeach
    </div>
@stop