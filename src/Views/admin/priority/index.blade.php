@extends($master)

@section('page')
    {{ tkAdminTrans('priority-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        @widget('\Kordy\Ticketit\Widgets\PriorityIndex', ['admin_route' => app('tkSettings')->grab('admin_route')])
    </div>
@stop
@section('footer')
    <script>
        $( ".deleteit" ).click(function( event ) {
            event.preventDefault();
            if (confirm("{!! tkAdminTrans('priority-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@append
