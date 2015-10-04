@extends($master)

@section('page')
    {{ trans('ticketit::admin.category-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.category-index-title') }}
                {!! link_to_route(
                                    config('ticketit.admin_route').'.category.create',
                                    trans('ticketit::admin.btn-create-new-category'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($categories->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.category-index-no-categories') }}
                {!! link_to_route(config('ticketit.admin_route').'.category.create', trans('ticketit::admin.category-index-create-new')) !!}
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
                @foreach($categories as $category)
                    <tr>
                        <td style="vertical-align: middle">
                            {{ $category->id }}
                        </td>
                        <td style="color: {{ $category->color }}; vertical-align: middle">
                            {{ $category->name }}
                        </td>
                        <td>
                            {!! link_to_route(
                                                    config('ticketit.admin_route').'.category.edit', trans('ticketit::admin.btn-edit'), $category->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    config('ticketit.admin_route').'.category.destroy', trans('ticketit::admin.btn-delete'), $category->id,
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
            if (confirm("{!! trans('ticketit::admin.category-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                var form = $(this).attr("form");
                $("#" + form).submit();
            }

        });
    </script>
@stop