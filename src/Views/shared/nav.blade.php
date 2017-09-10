<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation" class="{!! $tools->fullUrlIs(tkAction('TicketsController@index')) ? "active" : "" !!}">
                <a href="{{ tkAction('TicketsController@index') }}">{{ tkTrans('nav-active-tickets') }}
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
            <li role="presentation" class="{!! $tools->fullUrlIs(tkAction('TicketsController@indexComplete')) ? "active" : "" !!}">
                <a href="{{ tkAction('TicketsController@indexComplete') }}">{{ tkTrans('nav-completed-tickets') }}
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
                <li role="presentation" class="{!! $tools->fullUrlIs(tkAction('DashboardController@index')) || Request::is($setting->grab('admin_route').'/indicator*') ? "active" : "" !!}">
                    <a href="{{ tkAction('DashboardController@index') }}">{{ tkAdminTrans('nav-dashboard') }}</a>
                </li>

                <li role="presentation" class="dropdown {!!
                    $tools->fullUrlIs(tkAction('StatusesController@index').'*') ||
                    $tools->fullUrlIs(tkAction('PrioritiesController@index').'*') ||
                    $tools->fullUrlIs(tkAction('AgentsController@index').'*') ||
                    $tools->fullUrlIs(tkAction('CategoriesController@index').'*') ||
                    $tools->fullUrlIs(tkAction('ConfigurationsController@index').'*') ||
                    $tools->fullUrlIs(tkAction('AdministratorsController@index').'*')
                    ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ tkAdminTrans('nav-settings') }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="{!! $tools->fullUrlIs(tkAction('StatusesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('StatusesController@index') }}">{{ tkAdminTrans('nav-statuses') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(tkAction('PrioritiesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('PrioritiesController@index') }}">{{ tkAdminTrans('nav-priorities') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(tkAction('AgentsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('AgentsController@index') }}">{{ tkAdminTrans('nav-agents') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(tkAction('CategoriesController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('CategoriesController@index') }}">{{ tkAdminTrans('nav-categories') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(tkAction('ConfigurationsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('ConfigurationsController@index') }}">{{ tkAdminTrans('nav-configuration') }}</a>
                        </li>
                        <li role="presentation"  class="{!! $tools->fullUrlIs(tkAction('AdministratorsController@index').'*') ? "active" : "" !!}">
                            <a href="{{ tkAction('AdministratorsController@index')}}">{{ tkAdminTrans('nav-administrator') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>
