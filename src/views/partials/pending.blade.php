    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-danger"> Pending Tickets </h2>
        </div>

        @if (session('status'))
            @include('partials.flash')
        @endif

        @if ($tickets->isEmpty())
            <p> There are no pending tickets.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Last action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{!! $ticket->id !!} </td>
                        <td>{!! link_to_action('TicketsController@show', $ticket->title, $ticket->slug) !!}</td>
                        <td>{!! $ticket->created_at->diffForHumans() !!} </td>
                        <td>{!! $ticket->updated_at->diffForHumans() !!} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
