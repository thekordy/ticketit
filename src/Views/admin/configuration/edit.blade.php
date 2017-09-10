@extends($master)

@section('page')
    {{ tkAdminTrans('config-edit-subtitle') }}
@stop

@section('content')
    @include('ticketit::shared.header')
     <div class="panel panel-default">
      <div class="panel-heading">
        <h3>{{ tkAdminTrans('config-edit-title') }}
          <div class="panel-nav pull-right" style="margin-top: -7px;">          
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.index',
                  tkAdminTrans('btn-back'), null,
                  ['class' => 'btn btn-default'])
              !!}
              {{--
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.create',
                  tkAdminTrans('btn-create-new-config'), null,
                  ['class' => 'btn btn-primary'])
              !!}
              --}}
          </div>
        </h3>  
      </div>     
      <div class="panel-body">
        <div class="form-horizontal">
{!! CollectiveForm::model($configuration, ['route' => [$setting->grab('admin_route').'.configuration.update', $configuration->id], 'method' => 'patch']) !!}
             <div class="well">
                 <b>{{ tkAdminTrans('config-edit-tools') }}</b><br>
                 <a href="https://www.functions-online.com/unserialize.html" target="_blank">
                     {{ tkAdminTrans('config-edit-unserialize') }}
                 </a>
                 <br>
                 <a href="https://www.functions-online.com/serialize.html" target="_blank">
                     {{ tkAdminTrans('config-edit-serialize') }}
                 </a>
             </div>

            @if(trans("ticketit::settings." . $configuration->slug) != ("ticketit::settings." . $configuration->slug) && trans("ticketit::settings." . $configuration->slug))
                <div class="panel panel-info">
                    <div class="panel-body">{!! trans("ticketit::settings." . $configuration->slug) !!}</div>
                </div>
            @endif

              <!-- ID Field -->
              <div class="form-group">
                  {!! CollectiveForm::label('id', tkAdminTrans('config-edit-id') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! CollectiveForm::text('id', null, ['class' => 'form-control', 'disabled']) !!}
                  </div>
              </div>                

              <!-- Slug Field -->
              <div class="form-group">
                  {!! CollectiveForm::label('slug', tkAdminTrans('config-edit-slug') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! CollectiveForm::text('slug', null, ['class' => 'form-control', 'disabled']) !!}
                  </div>
              </div>

              <div class="form-group">
                  {!! CollectiveForm::label('default', tkAdminTrans('config-edit-default') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      @if(!$default_serialized)
                          {!! CollectiveForm::text('default', null, ['class' => 'form-control', 'disabled']) !!}
                      @else
                          <pre>{{var_export(unserialize($configuration->default), true)}}</pre>
                      @endif
                  </div>
              </div>


              <!-- Value Field -->
              <div class="form-group">
                  {!! CollectiveForm::label('value', tkAdminTrans('config-edit-value') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      @if(!$should_serialize)
                            {!! CollectiveForm::text('value', null, ['class' => 'form-control']) !!}
                      @else
                          {!! CollectiveForm::textarea('value', var_export(unserialize($configuration->value), true), ['class' => 'form-control']) !!}
                      @endif
                  </div>
              </div>

            <!-- Serialize Field -->
            <div class="form-group">
                {!! CollectiveForm::label('serialize', tkAdminTrans('config-edit-should-serialize') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-9">
                    {!! CollectiveForm::checkbox('serialize', 1, $should_serialize, ['class' => 'form-control', 'onchange' =>  'changeSerialize(this)',]) !!}
                    <span class="help-block" style="color: red;">@lang('ticketit::admin.config-edit-eval-warning') <code>eval('$value = serialize(' . $value . ');')</code></span>
                </div>
            </div>

            <!-- Password Field -->
            <div id="serialize-password" class="form-group">
                {!! CollectiveForm::label('password', tkAdminTrans('config-edit-reenter-password') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-9">
                    {!! CollectiveForm::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>

              <!-- Lang Field -->
              <div class="form-group">
                  {!! CollectiveForm::label('lang', tkAdminTrans('config-edit-language') . tkAdminTrans('colon'), ['class' => 'col-sm-2 control-label']) !!}
                  <div class="col-sm-9">
                      {!! CollectiveForm::text('lang', null, ['class' => 'form-control']) !!}
                  </div>
              </div>

              <!-- Submit Field -->
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    {!! CollectiveForm::submit(tkAdminTrans('btn-submit'), ['class' => 'btn btn-primary']) !!}
                  </div>
              </div>

          {!! CollectiveForm::close() !!}
        </div>
      </div>
    </div>

    <script>
        function changeSerialize(e){
            document.querySelector("#serialize-password").style.display = e.checked ? 'block' : 'none';
            document.querySelector(".help-block").style.display = e.checked ? 'block' : 'none';
        }

        changeSerialize(document.querySelector("input[name='serialize']"));


    </script>


    @if($should_serialize)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{ Kordy\Ticketit\Helpers\Cdn::CodeMirror }}/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{ Kordy\Ticketit\Helpers\Cdn::CodeMirror }}/mode/clike/clike.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{ Kordy\Ticketit\Helpers\Cdn::CodeMirror }}/mode/php/php.min.js"></script>


    <script>

        loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/' . Kordy\Ticketit\Helpers\Cdn::CodeMirror . '/codemirror.min.css').'"' !!});
        loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/' . Kordy\Ticketit\Helpers\Cdn::CodeMirror . '/theme/monokai.min.css').'"' !!});

        window.addEventListener('load', function(){
            CodeMirror.fromTextArea( document.querySelector("textarea[name='value']"), {
                lineNumbers: true,
                mode: 'text/x-php',
                theme: 'monokai',
                indentUnit: 2,
                lineWrapping: true
            });
        });

    </script>
    @endif

@stop