@extends($master)

@section('page')
    {{ trans('ticketit::admin.priority_index_title') }}
@stop

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.priority_index_title') }}
                {!! link_to_route(
                                    config('ticketit.admin_route').'.priority.create',
                                    trans('ticketit::admin.btn-create-new-priority'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($priorities->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.priority_index_no_priorities') }}
                {!! link_to_route(config('ticketit.admin_route').'.priority.create', trans('ticketit::admin.priority_index_create_new')) !!}
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
                @foreach($priorities as $priority)
                    <tr>
                        <td style="vertical-align: middle">
                            {{ $priority->id }}
                        </td>
                        <td style="color: {{ $priority->color }}; vertical-align: middle">
                            {{ $priority->name }}
                        </td>
                        <td>
                            {!! link_to_route(
                                                    config('ticketit.admin_route').'.priority.edit', trans('ticketit::admin.btn-edit'), $priority->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    config('ticketit.admin_route').'.priority.destroy', trans('ticketit::admin.btn-delete'), $priority->id,
                                                    [
                                                    'class' => 'btn btn-danger deleteit',
                                                    'form' => "delete-$priority->id",
                                                    "node" => $priority->name
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
                                        config('ticketit.admin_route').'.priority.destroy',
                                        $priority->id
                                        ],
                            'id' => "delete-$priority->id"
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
            if (confirm("{!! trans('ticketit::admin.priority_index_js_delete') !!}" + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@stop