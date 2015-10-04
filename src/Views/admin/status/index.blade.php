@extends($master)

@section('page')
    {{ trans('ticketit::admin.status-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.status-index-title') }}
                {!! link_to_route(
                                    config('ticketit.admin_route').'.status.create',
                                    trans('ticketit::admin.btn-create-new-status'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($statuses->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.status-index-no-statuses') }}
                {!! link_to_route(config('ticketit.admin_route').'.status.create', trans('ticketit::admin.status-index-create-new')) !!}
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
                                                    config('ticketit.admin_route').'.status.edit', trans('ticketit::admin.btn-edit'), $status->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    config('ticketit.admin_route').'.status.destroy', trans('ticketit::admin.btn-delete'), $status->id,
                                                    [
                                                    'class' => 'btn btn-danger deleteit',
                                                    'form' => "delete-$status->id",
                                                    "node" => $status->name
                                                    ])
                                !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => [
                                        config('ticketit.admin_route').'.status.destroy',
                                        $status->id
                                        ],
                            'id' => "delete-$status->id"
                            ])
            !!}
            {!! Form::close() !!}
        @endif
    </div>
@stop
@section('footer')
    <script>
        $( ".deleteit" ).click(function( event ) {
            event.preventDefault();
            if (confirm("{!! trans('ticketit::admin.status-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@stop