@extends($master)
@section('page', 'Ticket: '. $ticket->subject)
@section('content')
        @include('ticketit::nav')
        @include('ticketit::tickets.partials.ticket_body')
        <br>
        <h2>Comments</h2>
        @include('ticketit::tickets.partials.comments')
        {!! $comments->render() !!}
        @include('ticketit::tickets.partials.comment_form')

@stop

@section('footer')
    <script>
        $(document).ready(function() {
            $( ".deleteit" ).click(function( event ) {
                event.preventDefault();
                if (confirm("Are you sure you want to delete: " + $(this).attr("node") + " ?"))
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