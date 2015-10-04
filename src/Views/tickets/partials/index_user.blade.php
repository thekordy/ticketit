<table class="table table-hover">
    <thead>
    <tr>
        <td>{{ trans('ticketit::lang.table-id') }}</td>
        <td>{{ trans('ticketit::lang.table-subject') }}</td>
        <td>{{ trans('ticketit::lang.table-status') }}</td>
        <td>{{ trans('ticketit::lang.table-last-updated') }}</td>
        <td>{{ trans('ticketit::lang.table-last-response') }}</td>				      
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
                    {{ trans('ticketit::lang.no-replies') }}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>