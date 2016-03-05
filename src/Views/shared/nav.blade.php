<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">

            <li role="presentation" class="{!! Request::is($setting->grab('main_route')) ? "active" : "" !!}">
                <a href="{{ url('/tickets' )}}">{{ trans('ticketit::lang.nav-active-tickets') }}
                    <span class="badge">
                        {{ Kordy\Ticketit\Models\Ticket::active()->agentUserTickets($u->id)->count() }}
                    </span>
                </a>
            </li>
            <li role="presentation" class="{!! Request::is($setting->grab('main_route').'/complete') ? "active" : "" !!}">
                <a href="{{ url('tickets/complete') }}">{{ trans('ticketit::lang.nav-completed-tickets') }}
                    <span class="badge">
                        {{ Kordy\Ticketit\Models\Ticket::complete()->agentUserTickets($u->id)->count() }}
                    </span>
                </a>
            </li>

            @if($u->isAdmin())
                <li role="presentation" class="{!! Request::is($setting->grab('admin_route')) || Request::is($setting->grab('admin_route').'/indicator*') ? "active" : "" !!}">
                    <a href="{{ url('/tickets-admin' )}}">{{ trans('ticketit::admin.nav-dashboard') }}</a>
                </li>

                <li role="presentation" class="dropdown {!!
                    Request::is($setting->grab('admin_route')."/status*") ||
                    Request::is($setting->grab('admin_route')."/priority*") ||
                    Request::is($setting->grab('admin_route')."/agent*") ||
                    Request::is($setting->grab('admin_route')."/category*") ||
                    Request::is($setting->grab('admin_route')."/administrator*")
                    ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ trans('ticketit::admin.nav-settings') }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="{!! Request::is($setting->grab('admin_route')."/status*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/status') }}">{{ trans('ticketit::admin.nav-statuses') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is($setting->grab('admin_route')."/priority*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/priority') }}">{{ trans('ticketit::admin.nav-priorities') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is($setting->grab('admin_route')."/agent*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/agent') }}">{{ trans('ticketit::admin.nav-agents') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is($setting->grab('admin_route')."/category*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/category') }}">{{ trans('ticketit::admin.nav-categories') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is($setting->grab('admin_route')."/config*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/configuration') }}">{{ trans('ticketit::admin.nav-configuration') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is($setting->grab('admin_route')."/administrator*") ? "active" : "" !!}">
                            <a href="{{ url('tickets-admin/administrator') }}">{{ trans('ticketit::admin.nav-administrator') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>
