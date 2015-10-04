<table class="table table-hover">
    <thead>
    <tr>
        <td>{{ trans('ticketit::lang.table-id') }}</td>
        <td>{{ trans('ticketit::lang.table-subject') }}</td>
        <td>{{ trans('ticketit::lang.table-owner') }}</td>
        <td>{{ trans('ticketit::lang.table-status') }}</td>
        <td>{{ trans('ticketit::lang.table-last-updated') }}</td>
        <td>{{ trans('ticketit::lang.table-last-response') }}</td>
        <td>{{ trans('ticketit::lang.table-priority') }}</td>
        <td>{{ trans('ticketit::lang.table-agent') }}</td>
        <td>{{ trans('ticketit::lang.table-category') }}</td>
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
            <td>
                {{ $ticket->user->name }}
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