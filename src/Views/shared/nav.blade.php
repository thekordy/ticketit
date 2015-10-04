<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! Request::is(config('ticketit.main_route')) ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') }}">{{ trans('ticketit::lang.nav-active-tickets') }}</a>
            </li>
            <li role="presentation" class="{!! Request::is(config('ticketit.main_route').'/complete') ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') . '/complete' }}">{{ trans('ticketit::lang.nav-completed-tickets') }}</a>
            </li>
        </ul>
    </div>
</div>
