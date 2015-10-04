@extends($master)
@section('page', trans('ticketit::lang.show-ticket-title') . trans('ticketit::lang.colon') . $ticket->subject)
@section('content')
        @include('ticketit::shared.header')
        @include('ticketit::tickets.partials.ticket_body')
        <br>
        <h2>{{ trans('ticketit::lang.comments') }}</h2>
        @include('ticketit::tickets.partials.comments')
        {!! $comments->render() !!}
        @include('ticketit::tickets.partials.comment_form')
@stop

@section('footer')
    <script>
        $(document).ready(function() {
            $( ".deleteit" ).click(function( event ) {
                event.preventDefault();
                if (confirm("{!! trans('ticketit::lang.show_ticket_js_delete') !!}" + $(this).attr("node") + " ?"))
                {
                    var form = $(this).attr("form");
                    $("#" + form).submit();
                }

            });
            $('#category_id').change(function(){
                var loadpage = "{!! route(config('ticketit.main_route').'agentselectlist') !!}/" + $(this).val() + "/{{ $ticket->id }}";
                $('#agent_id').load(loadpage);
            });
        });
    </script>
@stop