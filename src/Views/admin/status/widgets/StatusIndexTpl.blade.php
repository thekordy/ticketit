<?php extract($data); ?>
<div class="panel-heading">
    <h2>{{ trans('ticketit::admin.status-index-title') }}
        {!! link_to_route(
                $admin_route.'.status.create',
                trans('ticketit::admin.btn-create-new-status'), null,
                ['class' => 'btn btn-primary pull-right'])
        !!}
    </h2>
</div>

@if ($statuses->isEmpty())
    <h3 class="text-center">{{ trans('ticketit::admin.status-index-no-statuses') }}
        {!! link_to_route($admin_route.'.status.create', trans('ticketit::admin.status-index-create-new')) !!}
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
        @foreach($statuses as $status)
            <tr>
                <td style="vertical-align: middle">
                    {{ $status->id }}
                </td>
                <td style="color: {{ $status->color }}; vertical-align: middle">
                    {{ $status->name }}
                </td>
                <td>
                    {!! link_to_route(
                    $admin_route.'.status.edit', trans('ticketit::admin.btn-edit'), $status->id, ['class' => 'btn btn-info'] )
                    !!}

                    {!! link_to_route(
                        $admin_route.'.status.destroy', trans('ticketit::admin.btn-delete'), $status->id,
                        [
                        'class' => 'btn btn-danger deleteit',
                        'form' => "delete-$status->id",
                        "node" => $status->name
                        ])
                    !!}
                    {!! CollectiveForm::open([
                            'method' => 'DELETE',
                            'route' => [ $admin_route.'.status.destroy', $status->id ],
                            'id' => "delete-{$status->id}"
                            ])
                    !!}
                    {!! CollectiveForm::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
