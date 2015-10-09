@extends($master)

@section('page')
    {{ trans('ticketit::admin.agent-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.agent-index-title') }}
                {!! link_to_route(
                                    $setting->grab('admin_route').'.agent.create',
                                    trans('ticketit::admin.btn-create-new-agent'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($agents->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.agent-index-no-agents') }}
                {!! link_to_route($setting->grab('admin_route').'.agent.create', trans('ticketit::admin.agent-index-create-new')) !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>{{ trans('ticketit::admin.table-id') }}</td>
                        <td>{{ trans('ticketit::admin.table-name') }}</td>
                        <td>{{ trans('ticketit::admin.table-categories') }}</td>
                        <td>{{ trans('ticketit::admin.table-join-category') }}</td>
                        <td>{{ trans('ticketit::admin.table-remove-agent') }}</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <td>
                            {{ $agent->id }}
                        </td>
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
                                                        $setting->grab('admin_route').'.agent.update',
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
                            {!! Form::submit(trans('ticketit::admin.btn-join'), ['class' => 'btn btn-info btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td>
                            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => [
                                        $setting->grab('admin_route').'.agent.destroy',
                                        $agent->id
                                        ],
                            'id' => "delete-$agent->id"
                            ]) !!}
                            {!! Form::submit(trans('ticketit::admin.btn-remove'), ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>
@stop
