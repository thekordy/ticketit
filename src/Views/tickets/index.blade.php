<div class="panel panel-default">
    <div class="panel-heading">
        <h2 style="margin:0;padding:0"> My Tickets
            {!! link_to_route(config('ticketit.main_route').'.create', 'New Ticket', null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    @if ($tickets->isEmpty() && Request::is(config('ticketit.main_route').'/complete'))
        <h3 class="text-center"> There are no complete tickets,
            {!! link_to_route(config('ticketit.main_route').'.create', 'create new ticket') !!}
        </h3>
        <br>
        <h4 class="text-center">
            <small>Be sure to check Active Tickets if you cannot find your ticket.</small>
        </h4>
    @elseif($tickets->isEmpty())
        <h3 class="text-center"> There are no active tickets,
            {!! link_to_route(config('ticketit.main_route').'.create', 'create new ticket') !!}
        </h3>
        <br>
        <h4 class="text-center">
            <small>Be sure to check Complete Tickets if you cannot find your ticket.</small>
        </h4>
    @else
        <div id="message"></div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Subject</td>
                    <td>Update</td>
                    <td>Priority</td>
                    <td>Agent</td>
                    <td>Last Response</td>
                    <td>Category</td>
                </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr class="ticket-tr small">
                    <td>{{ $ticket->id }}</td>
                    <td>
                        {!!  link_to_route(
                                        config('ticketit.main_route').'.show',
                                        $ticket->subject,
                                        $ticket->id,
                                        ['style' => 'color: '.$ticket->status->color]) !!}
                    </td>
                    <td>
                        {{ $ticket->updated_at->diffForHumans() }}
                    </td>
                    <td style="color: {{ $ticket->priority->color }}">
                        {{ $ticket->priority->name }}
                    </td>
                    <td>
                        {{ $ticket->agent->name }}
                    </td>
                    <td>
                        @if($ticket->hasComments())
                            {{ $ticket->comments->last()->user->name }}
                        @else
                            No replies.
                        @endif
                    </td>
                    <td style="color: {{ $ticket->category->color }}">
                        {{ $ticket->category->name }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
{!! $tickets->render() !!}
