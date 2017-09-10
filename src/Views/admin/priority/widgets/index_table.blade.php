<div class="panel-heading">
    <h2>{{ tkAdminTrans('priority-index-title') }}
        {!! link_to_route(
                            $data['admin_route'].'.priority.create',
                            tkAdminTrans('btn-create-new-priority'), null,
                            ['class' => 'btn btn-primary pull-right'])
        !!}
    </h2>
</div>

@if ($data['priorities']->isEmpty())
    <h3 class="text-center">{{ tkAdminTrans('priority-index-no-priorities') }}
        {!! link_to_route($data['admin_route'].'.priority.create', tkAdminTrans('priority-index-create-new')) !!}
    </h3>
@else
    <div id="message"></div>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>{{ tkAdminTrans('table-id') }}</td>
            <td>{{ tkAdminTrans('table-name') }}</td>
            <td>{{ tkAdminTrans('table-action') }}</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data['priorities ']as $priority)
            <tr>
                <td style="vertical-align: middle">
                    {{ $priority->id }}
                </td>
                <td style="color: {{ $priority->color }}; vertical-align: middle">
                    {{ $priority->name }}
                </td>
                <td>
                    {!! link_to_route(
                                            $data['admin_route'].'.priority.edit', tkAdminTrans('btn-edit'), $priority->id,
                                            ['class' => 'btn btn-info'] )
                        !!}

                    {!! link_to_route(
                                        $data['admin_route'].'.priority.destroy', tkAdminTrans('btn-delete'), $priority->id,
                                        [
                                        'class' => 'btn btn-danger deleteit',
                                        'form' => "delete-$priority->id",
                                        "node" => $priority->name
                                        ])
                    !!}
                    {!! CollectiveForm::open([
                                    'method' => 'DELETE',
                                    'route' => [
                                                $data['admin_route'].'.priority.destroy',
                                                $priority->id
                                                ],
                                    'id' => "delete-$priority->id"
                                    ])
                    !!}
                    {!! CollectiveForm::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
