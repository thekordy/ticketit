@extends($master)

@section('page')
    {{ trans('ticketit::admin.status-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        @widget('\Kordy\Ticketit\Views\admin\status\widgets\StatusIndex', ['admin_route' => $setting->grab('admin_route')])
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
@append
