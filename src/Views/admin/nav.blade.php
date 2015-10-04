<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! Request::is(config('ticketit.admin_route')) ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}">{{ trans('ticketit::admin.nav-dashboard') }}</a>
            </li>
            <li role="presentation" class="{!! Request::is(config('ticketit.admin_route')."/status*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/status">{{ trans('ticketit::admin.nav-statuses') }}</a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/priority*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/priority">{{ trans('ticketit::admin.nav-priorities') }}</a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/agent*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/agent">{{ trans('ticketit::admin.nav-agents') }}</a>
            </li>
            <li role="presentation"  class="{!! Request::is(config('ticketit.admin_route')."/category*") ? "active" : "" !!}">
                <a href="/{{ config('ticketit.admin_route') }}/category">{{ trans('ticketit::admin.nav-categories') }}</a>
            </li>
        </ul>
    </div>
</div>