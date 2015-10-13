@extends($master)

@section('content')

    <h2>{{ trans('ticketit::admin.config-edit-title') }}</h2>
    <div class="panel panel-default">
      <div class="panel-heading">
        {{ trans('ticketit::admin.config-edit-subtitle') }}
        <div class="panel-nav pull-right" style="margin-top: -7px;">
          <a href="{!! route($setting->grab('admin_route').'.configuration.index') !!}" class="btn btn-default">Back</a>
        </div>
      </div>
      <div class="panel-body">
        <div class="form-horizontal">
          @include('common.errors')
{!! Form::model($configuration, ['route' => [$setting->grab('admin_route').'.configuration.update', $configuration->id], 'method' => 'patch']) !!}

              <!-- ID Field -->
              <div class="form-group">
                  {!! Form::label('id', trans('ticketit::admin.config-edit-id') . trans('ticketit::admin.colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('id', null, ['class' => 'form-control', 'disabled']) !!}
                  </div>
              </div>                

              <!-- Slug Field -->
              <div class="form-group">
                  {!! Form::label('slug', trans('ticketit::admin.config-edit-slug') . trans('ticketit::admin.colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('slug', null, ['class' => 'form-control', 'disabled']) !!}
                  </div>
              </div>

              <!-- Default Field -->
              <div class="form-group">
                  {!! Form::label('default', trans('ticketit::admin.config-edit-default') . trans('ticketit::admin.colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('default', null, ['class' => 'form-control', 'disabled']) !!}
                  </div>
              </div>

              <!-- Value Field -->
              <div class="form-group">
                  {!! Form::label('value', trans('ticketit::admin.config-edit-value') . trans('ticketit::admin.colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('value', null, ['class' => 'form-control']) !!}
                  </div>
              </div>

              <!-- Lang Field -->
              <div class="form-group">
                  {!! Form::label('lang', trans('ticketit::admin.config-edit-language') . trans('ticketit::admin.colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('lang', null, ['class' => 'form-control']) !!}
                  </div>
              </div>

              <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::submit(trans('ticketit::admin.btn-save'), ['class' => 'btn btn-primary']) !!}
              </div>

          {!! Form::close() !!}
        </div>
      </div>
      <div class="panel-footer">
      </div>
    </div>

@stop