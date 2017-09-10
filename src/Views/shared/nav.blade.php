<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\TicketsController@index')) ? "active" : "" !!}">
                <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}">{{ tkTrans('nav-active-tickets') }}
                    <span class="badge">
                         <?php 
                            if ($u->isAdmin()) {
                                echo Kordy\Ticketit\Models\Ticket::active()->count();
                            } elseif ($u->isAgent()) {
                                echo Kordy\Ticketit\Models\Ticket::active()->agentUserTickets($u->id)->count();
                            } else {
                                echo Kordy\Ticketit\Models\Ticket::userTickets($u->id)->active()->count();
                            }
                        ?>
                    </span>
                </a>
            </li>
            <li role="presentation" class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete')) ? "active" : "" !!}">
                <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">{{ tkTrans('nav-completed-tickets') }}
                    <span class="badge">
                        <?php 
                            if ($u->isAdmin()) {
                                echo Kordy\Ticketit\Models\Ticket::complete()->count();
                            } elseif ($u->isAgent()) {
                                echo Kordy\Ticketit\Models\Ticket::complete()->agentUserTickets($u->id)->count();
                            } else {
                                echo Kordy\Ticketit\Models\Ticket::userTickets($u->id)->complete()->count();
                            }
                        ?>
                    </span>
                </a>
            </li>

            @if($u->isAdmin())
                <li role="presentation" class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\DashboardController@index')) || Request::is($setting->grab('admin_route').'/indicator*') ? "active" : "" !!}">
                    <a href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index') }}">{{ tkAdminTrans('nav-dashboard') }}</a>
                </li>

                <li role="presentation" class="dropdown {!!
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\StatusesController@index').'*') ||
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\PrioritiesController@index').'*') ||
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\AgentsController@index').'*') ||
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\CategoriesController@index').'*') ||
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\ConfigurationsController@index').'*') ||
                    $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\AdministratorsController@index').'*')
                    ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ tkAdminTrans('nav-settings') }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\StatusesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\StatusesController@index') }}">{{ tkAdminTrans('nav-statuses') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\PrioritiesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\PrioritiesController@index') }}">{{ tkAdminTrans('nav-priorities') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\AgentsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\AgentsController@index') }}">{{ tkAdminTrans('nav-agents') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\CategoriesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\CategoriesController@index') }}">{{ tkAdminTrans('nav-categories') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\ConfigurationsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\ConfigurationsController@index') }}">{{ tkAdminTrans('nav-configuration') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(action('\Kordy\Ticketit\Controllers\AdministratorsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ action('\Kordy\Ticketit\Controllers\AdministratorsController@index')}}">{{ tkAdminTrans('nav-administrator') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>
