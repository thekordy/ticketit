@extends($master)

@section('content')
    @include('ticketit::shared.header')
     <div class="panel panel-default">
      <div class="panel-heading">
        <h3>{{ trans('ticketit::admin.config-edit-title') }}
          <div class="panel-nav pull-right" style="margin-top: -7px;">          
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.index',
                  trans('ticketit::admin.btn-back'), null,
                  ['class' => 'btn btn-default'])
              !!}
              {{--
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.create',
                  trans('ticketit::admin.btn-create-new-config'), null,
                  ['class' => 'btn btn-primary'])
              !!}
              --}}
          </div>
        </h3>  
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
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    {!! Form::submit(trans('ticketit::admin.btn-submit'), ['class' => 'btn btn-primary']) !!}
                  </div>
              </div>

          {!! Form::close() !!}
        </div>
      </div>
      <div class="panel-footer">
      </div>
    </div>

@stop