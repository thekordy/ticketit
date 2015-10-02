@extends($master)

@section('page')
    Priorities Management
@stop

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Manage Priorities
                {!! link_to_route(
                                    config('ticketit.admin_route').'.priority.create',
                                    'Create new priority', null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($priorities->isEmpty())
            <h3 class="text-center"> There are no priorities,
                {!! link_to_route(config('ticketit.admin_route').'.priority.create', 'create new priority') !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
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
                                                    config('ticketit.admin_route').'.priority.edit', 'Edit', $priority->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    config('ticketit.admin_route').'.priority.destroy', 'Delete', $priority->id,
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
            if (confirm("Are you sure you want to delete the priority: " + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@stop