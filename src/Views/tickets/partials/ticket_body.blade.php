<div class="panel panel-default">
    <div class="panel-body">
        <div class="content">
            <h2 class="header">
                {{ $ticket->subject }}
                <span class="pull-right">
                    @if(! $ticket->completed_at)
                        @if($close_perm == 'yes')
                            {!! link_to_route(config('ticketit.main_route').'.complete', 'Mark Complete', $ticket->id,
                                                ['class' => 'btn btn-success']) !!}
                        @endif
                    @else
                        @if($reopen_perm == 'yes')
                            {!! link_to_route(config('ticketit.main_route').'.reopen', 'Reopen Ticket', $ticket->id,
                                                ['class' => 'btn btn-success']) !!}
                        @endif
                    @endif
                    @if($u->isAgent())
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ticket-edit-modal">
                            Edit Ticket
                        </button>
                    @endif
                    @if($u->isAdmin())
                            {!! link_to_route(
                                            config('ticketit.main_route').'.destroy', 'Delete', $ticket->id,
                                            [
                                            'class' => 'btn btn-danger deleteit',
                                            'form' => "delete-ticket-$ticket->id",
                                            "node" => $ticket->subject
                                            ])
                            !!}
                    @endif
                </span>
            </h2>
            <div class="panel well well-sm">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p> <strong>Owner</strong>: {{ $ticket->user->name }}</p>
                            <p>
                                <strong>Status</strong>:

                                @if( $ticket->isComplete() && ! config('ticketit.default_close_status_id') )
                                    <span style="color: blue">Complete</span>
                                @else
                                    <span style="color: {{ $ticket->status->color }}">{{ $ticket->status->name }}</span>
                                @endif

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
                </div>
            </div>

            <div class="col-md-12">
                <p> {!! nl2br(e($ticket->content))  !!} </p>
            </div>
        </div>
        {!! Form::open([
                        'method' => 'DELETE',
                        'route' => [
                                    config('ticketit.main_route').'.destroy',
                                    $ticket->id
                                    ],
                        'id' => "delete-ticket-$ticket->id"
                        ])
        !!}
        {!! Form::close() !!}
    </div>
</div>

    @if($u->isAgent())
        @include('ticketit::tickets.edit')
    @endif
