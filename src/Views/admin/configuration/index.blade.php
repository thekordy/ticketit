@extends($master)

@section('page')
    {{ trans('ticketit::admin.config-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
<!-- configuration -->  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>{{ trans('ticketit::admin.config-index-title') }}
          <div class="panel-nav pull-right" style="margin-top: -7px;">          
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.index',
                  trans('ticketit::admin.btn-back'), null,
                  ['class' => 'btn btn-default'])
              !!}
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.create',
                  trans('ticketit::admin.btn-create-new-config'), null,
                  ['class' => 'btn btn-primary'])
              !!}
          </div>
        </h3>  
      </div>
@if($configurations->isEmpty())
      <div class="well text-center">{{ trans('ticketit::admin.config-index-no-settings') }}</div>
@else
      @include('ticketit::admin.configuration.table')   
@endif
    @include('ticketit::admin.configuration.common.paginate', ['records' => $configurations])
    </div>
<!-- // Configuration -->
@endsection