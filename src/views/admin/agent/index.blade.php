@extends($master)

@section('page')
    Agents Management
@stop

@section('content')
    @include('ticketit::shared.admin-header')
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
                            @foreach($agent->categories as $category)
                                <span style="color: {{ $category->color }}">
                                    {{  $category->name }}
                                </span>
                            @endforeach
                        </td>
                        <td>
                            {!! Form::open([
                                            'method' => 'PATCH',
                                            'route' => [
                                                        config('ticketit.admin_route').'.agent.update',
                                                        $agent->id
                                                        ],
                                            ]) !!}
                            @foreach(\Kordy\Ticketit\Models\Category::all() as $agent_cat)
                                <input name="agent_cats[]"
                                       type="checkbox"
                                       value="{{ $agent_cat->id }}"
                                       {!! ($agent_cat->agents()->where("id", $agent->id)->count() > 0) ? "checked" : ""  !!}
                                       > {{ $agent_cat->name }}
                            @endforeach
                            {!! Form::submit('Join', ['class' => 'btn btn-info btn-sm']) !!}
                            {!! Form::close() !!}
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