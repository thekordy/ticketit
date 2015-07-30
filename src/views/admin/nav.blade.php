<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! Request::is(config('ticketit.admin_route')) ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}"> Dashboard </a>
            </li>
            <li role="presentation" class="{!! Request::is(config('ticketit.admin_route')."/status*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/status"> Statuses </a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/priority*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/priority"> Priorities </a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/agent*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/agent"> Agents </a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/category*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/category"> Categories </a>
            </li>
        </ul>
    </div>
</div>