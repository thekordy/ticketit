@extends('ticketit::layouts.master')

@section('page', trans('ticketit::admin.place-index-title'))

@section('ticketit_header')
{!! link_to_route(
    $setting->grab('admin_route').'.place.create',
    trans('ticketit::admin.btn-create-new-place'), null,
    ['class' => 'btn btn-primary'])
!!}
@stop

@section('ticketit_content_parent_class', 'p-0')

@section('ticketit_content')
    @if ($places->isEmpty())
        <h3 class="text-center">{{ trans('ticketit::admin.place-index-no-places') }}
            {!! link_to_route($setting->grab('admin_route').'.place.create', trans('ticketit::admin.place-index-create-new')) !!}
        </h3>
    @else
        <div id="message"></div>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>{{ trans('ticketit::admin.table-id') }}</th>
                    <th>{{ trans('ticketit::admin.table-name') }}</th>
                    <th>{{ trans('ticketit::admin.table-action') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($places as $place)
                <tr>
                    <td style="vertical-align: middle">
                        {{ $place->id }}
                    </td>
                    <td style="color: {{ $place->color }}; vertical-align: middle">
                        {{ $place->name }}
                    </td>
                    <td>
                        {!! link_to_route(
                                                $setting->grab('admin_route').'.place.edit', trans('ticketit::admin.btn-edit'), $place->id,
                                                ['class' => 'btn btn-info'] )
                            !!}

                            {!! link_to_route(
                                                $setting->grab('admin_route').'.place.destroy', trans('ticketit::admin.btn-delete'), $place->id,
                                                [
                                                'class' => 'btn btn-danger deleteit',
                                                'form' => "delete-$place->id",
                                                "node" => $place->name
                                                ])
                            !!}
                        {!! CollectiveForm::open([
                                        'method' => 'DELETE',
                                        'route' => [
                                                    $setting->grab('admin_route').'.place.destroy',
                                                    $place->id
                                                    ],
                                        'id' => "delete-$place->id"
                                        ])
                        !!}
                        {!! CollectiveForm::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@stop
@section('footer')
    <script>
        $( ".deleteit" ).click(function( event ) {
            event.preventDefault();
            if (confirm("{!! trans('ticketit::admin.place-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@append
