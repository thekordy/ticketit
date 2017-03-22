@if (isset($counts['agent']))
<div id="agent_panel" class="panel panel-default">
    <div class="panel-body text-left">
	<span>Agent: </span>
	@if (session('ticketit_filter_agent')!="")
		<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/agent/remove" class="btn btn-default btn-sm">All <span class="badge">{{$counts['total_agent']}}</span></a>
	@else
		<button class="btn btn-info btn-sm">All <span class="badge">{{$counts['total_agent']}}</span></button>
	@endif		
	@foreach ($counts['agent'] as $ag)	
		@if ($ag->id==session('ticketit_filter_agent'))
			<button class="btn btn-info btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></button>
		@else
			<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/agent/{{$ag->id}}" class="btn btn-default btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></a>
		@endif
		
	@endforeach 
</div></div>
@endif

<div class="panel panel-default">

    <div class="panel-heading">
        @if( isset($counts['owner']))
			<div class="pull-left">Owner 
			<a href="{{ session('ticketit_filter_owner')==''?'#':action('\Kordy\Ticketit\Controllers\TicketsController@index').'/filter/owner/remove' }}" class="btn {{ session('ticketit_filter_owner')==''?'btn-warning':'btn-default' }} btn-sm">All <span class="badge">{{ $counts['owner']['all'] }}</span></a>
			 <a href="{{ session('ticketit_filter_owner')=='me'?'#':action('\Kordy\Ticketit\Controllers\TicketsController@index').'/filter/owner/me' }}" class="btn {{ session('ticketit_filter_owner')=='me'?'btn-warning':'btn-default' }} btn-sm">Me <span class="badge">{{ $counts['owner']['me'] }}</span></a>
			</div>
		@endif
		<h2>{{ trans('ticketit::lang.index-my-tickets') }}
            {!! link_to_route($setting->grab('main_route').'.create', trans('ticketit::lang.btn-create-new-ticket'), null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    <div class="panel-body">
        <div id="message"></div>

        @include('ticketit::tickets.partials.datatable')
    </div>

</div>
