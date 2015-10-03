<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! Request::is(config('ticketit.main_route')) ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') }}">Active Tickets</a>
            </li>
            <li role="presentation" class="{!! Request::is(config('ticketit.main_route').'/complete') ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') . '/complete' }}">Complete Tickets</a>
            </li>
        </ul>
    </div>
</div>
