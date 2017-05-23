@if (isset($counts['agent']))
<div id="agent_panel" class="panel panel-default">
    <div class="panel-body text-left">
	<span class="title category">Category:</span> 
	<?php $agent_name="prova";?>
	@if (count($counts['category'])>2)
		<select class="nav_filter_select" style="width: 20%">
		<option value="/filter/category/remove">All ({{$counts['total_category']}})</option>
		@foreach ($counts['category'] as $cat)			
			<option value="/filter/category/{{$cat->id}}"
			@if ($cat->id==session('ticketit_filter_category'))
				<?php $category_name="<span style=\"color: ".$cat->color."\">".$cat->name."</span>";?>
				selected="selected"
			@endif
			>{{$cat->name}} ({!!$cat->tickets_count !!})</option>		
		@endforeach
		</select>
	@else
		@if (session('ticketit_filter_category')!="")
			<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/category/remove" class="btn btn-default btn-sm">All <span class="badge">{{$counts['total_category']}}</span></a>
		@else
			<button class="btn btn-success btn-sm">All <span class="badge">{{$counts['total_category']}}</span></button>
		@endif
		
		<div class="btn-group filter-buttons">
		@foreach ($counts['category'] as $cat)
			@if ($cat->id==session('ticketit_filter_category'))
				<button class="btn btn-success btn-sm">{{$cat->name}} <span class="badge">{!!$cat->tickets_count !!}</span></button>
				<?php $category_name=$cat->name;?>
			@else
				<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/category/{{$cat->id}}" class="btn btn-default btn-sm">{{$cat->name}} <span class="badge">{!!$cat->tickets_count !!}</span></a>
			@endif			
		@endforeach
		</div>
	@endif
	
	<span class="title agent">Agent:</span> 
	@if (count($counts['agent'])>4)
		<select class="nav_filter_select" style="width: 20%">
		<option value="/filter/agent/remove">All ({{$counts['total_agent']}})</option>
		@foreach ($counts['agent'] as $ag)			
			<option value="/filter/agent/{{$ag->id}}"
			@if ($ag->id==session('ticketit_filter_agent'))
				<?php $agent_name="<u>".$ag->name."</u>";?>
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
	
		<div class="btn-group filter-buttons">
		@foreach ($counts['agent'] as $ag)
			@if ($ag->id==session('ticketit_filter_agent'))
				<button class="btn btn-info btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></button>
				<?php $agent_name="<u>".$ag->name."</u>";?>
			@else
				<a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}/filter/agent/{{$ag->id}}" class="btn btn-default btn-sm">{{$ag->name}} <span class="badge">{!!$ag->agent_total_tickets_count !!}</span></a>
			@endif			
		@endforeach
		</div>
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
		<h2><?php
		
		
		$cons='ticketit::lang.index';
		$vars=array();
		
		if (session('ticketit_filter_agent')==auth()->user()->id){
			$cons.="-current-agent";
		}elseif (session('ticketit_filter_agent')!=""){
			$cons.="-other-agent";
			$vars['agent']=$agent_name;
		}		
		
		$cons.=session('ticketit_filter_owner')=="me"?"-my-tickets":"-tickets";

		if (session('ticketit_filter_category')!=""){
			$cons.="-in";
			$vars['category']=$category_name;
		}
		echo trans($cons,$vars);?>
            {!! link_to_route($setting->grab('main_route').'.create', trans('ticketit::lang.btn-create-new-ticket'), null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    <div class="panel-body">
        <div id="message"></div>

        @include('ticketit::tickets.partials.datatable')
    </div>

</div>
