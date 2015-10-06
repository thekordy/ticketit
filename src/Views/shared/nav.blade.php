<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">

            <li role="presentation" class="{!! Request::is(config('ticketit.main_route')) ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') }}">{{ trans('ticketit::lang.nav-active-tickets') }}</a>
            </li>
            <li role="presentation" class="{!! Request::is(config('ticketit.main_route').'/complete') ? "active" : "" !!}">
                <a href="/{{ config('ticketit.main_route') . '/complete' }}">{{ trans('ticketit::lang.nav-completed-tickets') }}</a>
            </li>

            @if($u->isAdmin())
                <li role="presentation" class="{!! Request::is(config('ticketit.admin_route')) ? "active" : "" !!}">
                    <a href="/{{ config('ticketit.admin_route') }}">{{ trans('ticketit::admin.nav-dashboard') }}</a>
                </li>
                
                <li role="presentation" class="dropdown {!! 
                    Request::is(config('ticketit.admin_route')."/status*") ||
                    Request::is(config('ticketit.admin_route')."/priority*") ||
                    Request::is(config('ticketit.admin_route')."/agent*") ||
                    Request::is(config('ticketit.admin_route')."/category*") 
                    ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Settings <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
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
                </li>
            @endif

        </ul>
    </div>
</div>
