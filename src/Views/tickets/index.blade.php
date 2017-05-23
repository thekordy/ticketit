@if (isset($counts['agent']))
<div id="agent_panel" class="panel panel-default">
    <div class="panel-body text-left">
	<span>Agent: </span>			
	@if (count($counts['agent'])>4)
		<select id="select_agent" style="width: 20%">
		<option value="/filter/agent/remove">All</option>
		@foreach ($counts['agent'] as $ag)			
			<option value="/filter/agent/{{$ag->id}}"
			@if ($ag->id==session('ticketit_filter_agent'))
				<?php $agent_name=$ag->name;?>
				selected="selected"
			@endif
			>{{$ag->name}} ({!!$ag->agent_total_tickets_count !!})</option>		
		@endforeach
		</select>
	@else
		@if (session('ticketit_filter_agent')!="")
			<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/agent/remove" class="btn btn-default btn-sm">All <span class="badge">{{$counts['total_agent']}}</span></a>
		@else
			<button class="btn btn-info btn-sm">All <span class="badge">{{$counts['total_agent']}}</span></button>
		@endif	
	
		@foreach ($counts['agent'] as $ag)
			@if ($ag->id==session('ticketit_filter_agent'))
				<button class="btn btn-info btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></button>
				<?php $agent_name=$ag->name;?>
			@else
				<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/agent/{{$ag->id}}" class="btn btn-default btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></a>
			@endif
			
		@endforeach
	@endif
	 
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
		<h2>@if (session('ticketit_filter_owner')=="me")
				@if (session('ticketit_filter_agent')=="")
					{{ trans('ticketit::lang.index-my-tickets') }}
				@elseif (session('ticketit_filter_agent')==auth()->user()->id)
					{{ trans('ticketit::lang.index-current-agent-my-tickets') }}
				@else
					{{ trans('ticketit::lang.index-agent-my-tickets',['agent'=>$agent_name]) }}
				@endif
			@else
				@if (session('ticketit_filter_agent')=="")
					{{ trans('ticketit::lang.index-all-tickets') }}
				@elseif (session('ticketit_filter_agent')==auth()->user()->id)
					{{ trans('ticketit::lang.index-current-agent-tickets') }}
				@else
					{{ trans('ticketit::lang.index-other-agent-tickets',['agent'=>$agent_name]) }}
				@endif
			@endif		
            {!! link_to_route($setting->grab('main_route').'.create', trans('ticketit::lang.btn-create-new-ticket'), null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    <div class="panel-body">
        <div id="message"></div>

        @include('ticketit::tickets.partials.datatable')
    </div>

</div>
