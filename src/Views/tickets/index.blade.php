<div class="panel panel-default">
    <div class="panel-heading">
        <h2>{{ trans('ticketit::lang.index-my-tickets') }}
            {!! link_to_route(config('ticketit.main_route').'.create', trans('ticketit::lang.btn-create-new-ticket'), null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    @if ($tickets->isEmpty() && Request::is(config('ticketit.main_route').'/complete'))
        <h3 class="text-center">{{ trans('ticketit::lang.index-complete-none') }}	</h3>
        <br>
        <h4 class="text-center">
            <small>{{ trans('ticketit::lang.index-active-check') }}	</small>
        </h4>
    @elseif($tickets->isEmpty())
        <h3 class="text-center">{{ trans('ticketit::lang.index-active-none') }}	
            {!! link_to_route(config('ticketit.main_route').'.create', trans('ticketit::lang.index-create-new-ticket')) !!}
        </h3>
        <br>
        <h4 class="text-center">
            <small>{{ trans('ticketit::lang.index-complete-check') }}	</small>
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
{!! $tickets->render() !!}
