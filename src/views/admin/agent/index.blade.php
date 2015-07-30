@extends($master)

@section('page')
    Agents Management
@stop

@section('content')
    @include('Ticketit::admin.nav')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Manage Agents
                {!! link_to_route(
                                    config('ticketit.admin_route').'.agent.create',
                                    'Add agents', null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>
        @include('Ticketit::shared.flash')
        @include('Ticketit::shared.flash_error')

        @if ($agents->isEmpty())
            <h3 class="text-center"> There are no agents,
                {!! link_to_route(config('ticketit.admin_route').'.agent.create', 'Add agents') !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <td>
                            {{ $agent->name }}
                        </td>
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => [
                                        config('ticketit.admin_route').'.agent.destroy',
                                        $agent->id
                                        ],
                            'id' => "delete-$agent->id"
                            ]) !!}
                            {!! Form::submit('Remove', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>
@stop