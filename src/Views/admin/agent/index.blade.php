@extends($master)

@section('page')
    {{ tkAdminTrans('agent-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ tkAdminTrans('agent-index-title') }}
                {!! link_to_route(
                                    $setting->grab('admin_route').'.agent.create',
                                    tkAdminTrans('btn-create-new-agent'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($agents->isEmpty())
            <h3 class="text-center">{{ tkAdminTrans('agent-index-no-agents') }}
                {!! link_to_route($setting->grab('admin_route').'.agent.create', tkAdminTrans('agent-index-create-new')) !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>{{ tkAdminTrans('table-id') }}</td>
                        <td>{{ tkAdminTrans('table-name') }}</td>
                        <td>{{ tkAdminTrans('table-categories') }}</td>
                        <td>{{ tkAdminTrans('table-join-category') }}</td>
                        <td>{{ tkAdminTrans('table-remove-agent') }}</td>
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
                            {!! CollectiveForm::open([
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
                            {!! CollectiveForm::submit(tkAdminTrans('btn-join'), ['class' => 'btn btn-info btn-sm']) !!}
                            {!! CollectiveForm::close() !!}
                        </td>
                        <td>
                            {!! CollectiveForm::open([
                            'method' => 'DELETE',
                            'route' => [
                                        $setting->grab('admin_route').'.agent.destroy',
                                        $agent->id
                                        ],
                            'id' => "delete-$agent->id"
                            ]) !!}
                            {!! CollectiveForm::submit(tkAdminTrans('btn-remove'), ['class' => 'btn btn-danger']) !!}
                            {!! CollectiveForm::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>
@stop
