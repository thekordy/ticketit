<div class="panel panel-default">

    <div class="panel-heading">
        <h2 style="margin:0;padding:0"> My Tickets
            {!! link_to_route(config('ticketit.main_route').'.create', 'New Ticket', null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    <div class="panel-body">
        @if ($tickets->isEmpty() && Request::is(config('ticketit.main_route').'/complete'))
            <h3 class="text-center"> There are no complete tickets</h3>
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
            @if(Kordy\Ticketit\Models\Agent::isAdmin() || Kordy\Ticketit\Models\Agent::isAgent())
                @include('ticketit::tickets.partials.index_agent')
            @else
                @include('ticketit::tickets.partials.index_user')
            @endif
        @endif
    </div>

</div>
