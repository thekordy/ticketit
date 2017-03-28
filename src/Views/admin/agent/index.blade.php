@extends($master)

@section('page')
    {{ trans('ticketit::admin.agent-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.agent-index-title') }}
                {!! link_to_route(
                                    $setting->grab('admin_route').'.agent.create',
                                    trans('ticketit::admin.btn-create-new-agent'), null,
                                    ['class' => 'btn btn-primary pull-right'])
                !!}
            </h2>
        </div>

        @if ($agents->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.agent-index-no-agents') }}
                {!! link_to_route($setting->grab('admin_route').'.agent.create', trans('ticketit::admin.agent-index-create-new')) !!}
            </h3>
        @else
            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>{{ trans('ticketit::admin.table-id') }}</td>
                        <td>{{ trans('ticketit::admin.table-name') }}</td>
                        <td>{{ trans('ticketit::admin.table-categories') }}</td>
						<td>{{ trans('ticketit::admin.table-categories-autoassign') }}</td>                        
                        <td>{{ trans('ticketit::admin.table-remove-agent') }}</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <td>
                            {{ $agent->id }}
                        </td>
                        <td>
                            {{ $agent->name }}
                        </td>
                        <td>
                            @foreach($agent->categories as $category)
                                <span style="color: {{ $category->color }}">
                                    {{  $category->name }}
                                </span>
                            @endforeach
							
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#CategoriesPopupAgent{{ $agent->id }}">{{ trans('ticketit::admin.btn-edit')}}</button>
							
							<div class="modal fade" id="CategoriesPopupAgent{{ $agent->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">{{ trans('ticketit::admin.agent-edit-title',['agent'=>$agent->name]) }}</h4>
								  </div>
								  <div class="modal-body">								  
									{!! CollectiveForm::open([
                                            'method' => 'PATCH',
                                            'route' => [
                                                        $setting->grab('admin_route').'.agent.update',
                                                        $agent->id
                                                        ],
                                            ]) !!}
									<table class="table table-hover table-striped">
										<thead><th>{{ trans('ticketit::admin.agent-edit-table-category') }}</th>
										<th>{{ trans('ticketit::admin.agent-edit-table-active') }}</th>
										<th>{{ trans('ticketit::admin.agent-edit-table-autoassign') }}</th></thead>
										<tbody>
										@foreach($categories as $agent_cat)
											<tr>
											<td>{{ $agent_cat->name }}</td>
											<td><input id="checkbox_agent_{!!$agent->id!!}_cat_{!! $agent_cat->id !!}" class="jquery_agent_cat{!! (count($agent->categories->whereIn('id',$agent_cat->id))>0) ? " checked" : ""  !!}" name="agent_cats[]"
										   type="checkbox"
										   value="{{ $agent_cat->id }}"
										   {!! (count($agent->categories->whereIn('id',$agent_cat->id))>0) ? "checked=\"checked\"" : ""  !!}
										   ></td>
											<td><input id="checkbox_agent_{!!$agent->id!!}_cat_{!! $agent_cat->id !!}_auto" name="agent_cats_autoassign[]"
										   type="checkbox"
										   value="{{ $agent_cat->id }}" {!! ($agent->categories->whereIn('id',$agent_cat->id)->first()['pivot']['autoassign']==0) ? "" : "checked=\"checked\""  !!} 
										   {!! (count($agent->categories->whereIn('id',$agent_cat->id)) == 0) ? "disabled=\"disabled\"" : ""  !!}
										   
										   ></td>
											</tr>
										@endforeach
										</tbody>
									</table>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									{!! CollectiveForm::submit('Update', ['class' => 'btn btn-info']) !!}
								  </div>
								  
									{!! CollectiveForm::close() !!}
								</div>
							  </div>
							</div>
                        </td>
						<td>
                            @foreach($agent->categories as $category)
								@if ($category->pivot->autoassign==1)
									<span style="color: {{ $category->color }}">
										{{  $category->name }}
									</span>
								@endif
								
                            @endforeach
                        </td>
                        <td>
                            {!! CollectiveForm::open([
                            'method' => 'DELETE',
                            'route' => [
                                        $setting->grab('admin_route').'.agent.destroy',
                                        $agent->id
                                        ],
                            'id' => "delete-$agent->id"
                            ]) !!}
                            {!! CollectiveForm::submit(trans('ticketit::admin.btn-remove'), ['class' => 'btn btn-danger']) !!}
                            {!! CollectiveForm::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>	
@stop

@section('footer')
<script type="text/javascript">
	$(function(){
		$('.jquery_agent_cat').click(function(){
			var checked=$(this).hasClass('checked');
			if (checked){
				$(this).removeClass('checked');
				$('#'+$(this).attr('id')+"_auto").prop('checked',false).prop('disabled','disabled');			
			}else{
				$(this).addClass('checked');
				$('#'+$(this).attr('id')+"_auto").prop('checked','checked').prop('disabled',false);
			}
		});
	});
</script>
@stop
