<table class="table table-hover">
    <thead>
    <tr>
        <td>#</td>
        <td>Subject</td>
        <td>Status</td>
        <td>Update</td>
        <td>Last Response</td>
        <td>Priority</td>
        <td>Agent</td>
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
                                $ticket->id) !!}
            </td>
            <td style="color: {{ $ticket->status->color }}">
                {{ $ticket->status->name }}
            </td>
            <td>
                {{ $ticket->updated_at->diffForHumans() }}
            </td>
            <td>
                @if($ticket->hasComments())
                    {{ $ticket->comments->last()->user->name }}
                @else
                    No replies.
                @endif
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