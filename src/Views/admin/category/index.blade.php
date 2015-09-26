@extends($master)

@section('page')
    Categories Management
@stop

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Manage Categories
                {!! link_to_route(
                                    config('ticketit.admin_route').'.category.create',
                                    'Create new category', null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($categories->isEmpty())
            <h3 class="text-center"> There are no categories,
                {!! link_to_route(config('ticketit.admin_route').'.category.create', 'create new category') !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td style="color: {{ $category->color }}; vertical-align: middle">
                            {{ $category->name }}
                        </td>
                        <td>
                            {!! link_to_route(
                                                    config('ticketit.admin_route').'.category.edit', 'Edit', $category->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    config('ticketit.admin_route').'.category.destroy', 'Delete', $category->id,
                                                    [
                                                    'class' => 'btn btn-danger deleteit',
                                                    'form' => "delete-$category->id",
                                                    "node" => $category->name
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
                                        config('ticketit.admin_route').'.category.destroy',
                                        $category->id
                                        ],
                            'id' => "delete-$category->id"
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
            if (confirm("Are you sure you want to delete the category: " + $(this).attr("node") + " ?"))
            {
                var form = $(this).attr("form");
                $("#" + form).submit();
            }

        });
    </script>
@stop