<div class="panel panel-default">
    <div class="panel-heading">
        <h2> My Tickets
            {!! link_to_route('tickets.create', 'New Ticket', null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>
    @include('Ticketit::shared.flash')

    @if ($tickets->isEmpty())
        <h3 class="text-center"> There are no tickets,
            {!! link_to_route('tickets.create', 'create new ticket') !!}
        </h3>
    @else
        <div id="message"></div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Subject</td>
                    <td>Update</td>
                    <td>priority</td>
                    <td>Responsible</td>
                    <td>Category</td>
                </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr class="ticket-tr small">
                    <td>{{ $ticket->id }}</td>
                    <td>
                        {!!  link_to_route(
                                        'tickets.show',
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