    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-primary"> All Tickets </h2>
        </div>

        @if (session('status'))
            @include('partials.flash')
        @endif

        @if ($tickets->isEmpty())
            <p> There are no tickets.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Last action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{!! $ticket->id !!} </td>
                        <td>{!! link_to_action('TicketsController@show', $ticket->title, $ticket->slug) !!}</td>
                        <td>{!! $ticket->created_at->diffForHumans() !!} </td>
                        <td {!! $ticket->status ? 'class="text-success"' : 'class="text-danger"' !!}>
                            {!! $ticket->status ? "Resolved" : "Pending" !!}
                        </td>
                        <td>{!! $ticket->updated_at->diffForHumans() !!} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
