<?php $currentAction = \Route::currentRouteAction(); ?>
<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">
            <li role="presentation"
                class="{!! ('Kordy\Ticketit\Controllers\TicketsController@index' == $currentAction) ? "active" : "" !!}">
                <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}">{{ trans('ticketit::lang.nav-active-tickets') }}
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
            <li role="presentation" class="{!! ('Kordy\Ticketit\Controllers\TicketsController@indexComplete' == $currentAction) ? "active" : "" !!}">

                <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">{{ trans('ticketit::lang.nav-completed-tickets') }}
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
                <li role="presentation"
                    class="{!! ('Kordy\Ticketit\Controllers\DashboardController@index' === $currentAction) || Request::is($setting->grab('admin_route').'/indicator*') ? "active" : "" !!}">
                    <a href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index') }}">{{ trans('ticketit::admin.nav-dashboard') }}</a>
                </li>
                <?php
                $actions = [
                    'statuses' => 'Kordy\Ticketit\Controllers\StatusesController@index',
                    'priorities' => 'Kordy\Ticketit\Controllers\PrioritiesController@index',
                    'agents' => 'Kordy\Ticketit\Controllers\AgentsController@index',
                    'categories' => 'Kordy\Ticketit\Controllers\CategoriesController@index',
                    'configuration' => 'Kordy\Ticketit\Controllers\ConfigurationsController@index',
                    'administrator' => 'Kordy\Ticketit\Controllers\AdministratorsController@index',
                ];
                ?>
                <li role="presentation" class="dropdown {!! in_array($currentAction, $actions) ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {{ trans('ticketit::admin.nav-settings') }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($actions as $key => $action)
                            <li role="presentation" class="{!! ($action == $currentAction) ? "active" : "" !!}">
                                <a href="{{ action('\\'.$action) }}">{{ trans('ticketit::admin.nav-'.$key) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>