<div class="panel-heading">
    <h2>{{ trans('ticketit::admin.priority-index-title') }}
        {!! link_to_route(
                            $data['admin_route'].'.priority.create',
                            trans('ticketit::admin.btn-create-new-priority'), null,
                            ['class' => 'btn btn-primary pull-right'])
        !!}
    </h2>
</div>

@if (($data['priorities'])->isEmpty())
    <h3 class="text-center">{{ trans('ticketit::admin.priority-index-no-priorities') }}
        {!! link_to_route($data['admin_route'].'.priority.create', trans('ticketit::admin.priority-index-create-new')) !!}
    </h3>
@else
    <div id="message"></div>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>{{ trans('ticketit::admin.table-id') }}</td>
            <td>{{ trans('ticketit::admin.table-name') }}</td>
            <td>{{ trans('ticketit::admin.table-action') }}</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data['priorities']as $priority)
            <tr>
                <td style="vertical-align: middle">
                    {{ $priority->id }}
                </td>
                <td style="color: {{ $priority->color }}; vertical-align: middle">
                    {{ $priority->name }}
                </td>
                <td>
                    {!! link_to_route(
                                            $data['admin_route'].'.priority.edit', trans('ticketit::admin.btn-edit'), $priority->id,
                                            ['class' => 'btn btn-info'] )
                        !!}

                    {!! link_to_route(
                                        $data['admin_route'].'.priority.destroy', trans('ticketit::admin.btn-delete'), $priority->id,
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
