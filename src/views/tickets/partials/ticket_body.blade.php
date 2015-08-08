<div class="panel panel-default">
    <div class="panel-body">
        @include('Ticketit::shared.flash')
        @include('Ticketit::shared.flash_error')
        <div class="content">
            <h2 class="header">
                {{ $ticket->subject }}
                <span class="pull-right">
                    @if(Kordy\Ticketit\Models\Agent::isAgent())
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ticket-edit-modal">
                            Edit Ticket
                        </button>
                    @endif
                </span>
            </h2>
            <hr>
            <div class="col-md-12">
                <div class="col-md-6">
                    <p> <strong>Owner</strong>: {{ $ticket->user->name }}</p>
                    <p>
                        <strong>Status</strong>:
                        <span style="color: {{ $ticket->status->color }}">
                            {{ $ticket->status->name }}
                        </span>
                    </p>
                    <p>
                        <strong>Priority</strong>:
                        <span style="color: {{ $ticket->priority->color }}">
                            {{ $ticket->priority->name }}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p> <strong>Responsible</strong>: {{ $ticket->agent->name }}</p>
                    <p>
                        <strong>Category</strong>:
                        <span style="color: {{ $ticket->category->color }}">
                            {{ $ticket->category->name }}
                        </span>
                    </p>
                    <p> <strong>Created</strong>: {{ $ticket->created_at->diffForHumans() }}</p>
                    <p> <strong>Last Update</strong>: {{ $ticket->updated_at->diffForHumans() }}</p>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <hr>
                <p> {{ nl2br(e($ticket->content)) }} </p>
            </div>
        </div>
    </div>
</div>

    @if(Kordy\Ticketit\Models\Agent::isAgent())
        @include('Ticketit::tickets.edit')
    @endif

@section('footer')
    <script>
        $('#category_id').change(function(){
            var loadpage = "{!! route(config('ticketit.main_route').'agentslist') !!}/" + $(this).val() + "/{{ $ticket->id }}";
           $('#agent_id').load(loadpage);
        });
    </script>
@stop