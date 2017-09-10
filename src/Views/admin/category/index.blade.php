@extends($master)

@section('page')
    {{ tkAdminTrans('category-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ tkAdminTrans('category-index-title') }}
                {!! link_to_route(
                                    $setting->grab('admin_route').'.category.create',
                                    tkAdminTrans('btn-create-new-category'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($categories->isEmpty())
            <h3 class="text-center">{{ tkAdminTrans('category-index-no-categories') }}
                {!! link_to_route($setting->grab('admin_route').'.category.create', tkAdminTrans('category-index-create-new')) !!}
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
                                                    $setting->grab('admin_route').'.category.edit', tkAdminTrans('btn-edit'), $category->id,
                                                    ['class' => 'btn btn-info'] )
                                !!}

                                {!! link_to_route(
                                                    $setting->grab('admin_route').'.category.destroy', tkAdminTrans('btn-delete'), $category->id,
                                                    [
                                                    'class' => 'btn btn-danger deleteit',
                                                    'form' => "delete-$category->id",
                                                    "node" => $category->name
                                                    ])
                                !!}
                            {!! CollectiveForm::open([
                                            'method' => 'DELETE',
                                            'route' => [
                                                        $setting->grab('admin_route').'.category.destroy',
                                                        $category->id
                                                        ],
                                            'id' => "delete-$category->id"
                                            ])
                            !!}
                            {!! CollectiveForm::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop
@section('footer')
    <script>
        $( ".deleteit" ).click(function( event ) {
            event.preventDefault();
            if (confirm("{!! tkAdminTrans('category-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                var form = $(this).attr("form");
                $("#" + form).submit();
            }

        });
    </script>
@append
