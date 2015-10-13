@extends($master)

@section('page')
    {{ trans('ticketit::admin.config-index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
<!-- configuration -->
    <h2>{{ trans('ticketit::admin.config-index-title') }}</h2>
    <div class="panel panel-default">
      <div class="panel-heading">
        {{ trans('ticketit::admin.config-index-subtitle') }}
        <div class="panel-nav pull-right" style="margin-top: -7px;">
          <a href="{!! route($setting->grab('admin_route').'.configuration.create') !!}" class="btn btn-default">{{ trans('ticketit::admin.btn-create-new-config') }}</a>
          <a href="{{ url($setting->grab('admin_route').'.configuration') }}" class="btn btn-default">{{ trans('ticketit::admin.btn-back') }}</a>
        </div>
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