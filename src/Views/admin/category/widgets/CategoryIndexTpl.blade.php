<?php $admin_route = $data['admin_route']  ?>
<div class="panel-heading">
    <h2>{{ trans('ticketit::admin.category-index-title') }}
        {!! link_to_route(
                            $admin_route.'.category.create',
                            trans('ticketit::admin.btn-create-new-category'), null,
                            ['class' => 'btn btn-primary pull-right'])
        !!}
    </h2>
</div>

@if (($data['categories'])->isEmpty())
    <h3 class="text-center">{{ trans('ticketit::admin.category-index-no-categories') }}
        {!! link_to_route($admin_route.'.category.create', trans('ticketit::admin.category-index-create-new')) !!}
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
        @foreach($data['categories'] as $category)
            <tr>
                <td style="vertical-align: middle">
                    {{ $category->id }}
                </td>
                <td style="color: {{ $category->color }}; vertical-align: middle">
                    {{ $category->name }}
                </td>
                <td>
                    {!! link_to_route(
                                            $admin_route.'.category.edit', trans('ticketit::admin.btn-edit'), $category->id,
                                            ['class' => 'btn btn-info'] )
                        !!}

                    {!! link_to_route(
                                        $admin_route.'.category.destroy', trans('ticketit::admin.btn-delete'), $category->id,
                                        [
                                        'class' => 'btn btn-danger deleteit',
                                        'form' => "delete-$category->id",
                                        "node" => $category->name
                                        ])
                    !!}
                    {!! CollectiveForm::open([
                                    'method' => 'DELETE',
                                    'route' => [
                                                $admin_route.'.category.destroy',
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
    