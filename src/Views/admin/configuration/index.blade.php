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
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a data-toggle="tab" href="#init-configs">{{ trans('ticketit::admin.config-index-initial') }}</a></li>
            <li><a data-toggle="tab" href="#ticket-configs">{{ trans('ticketit::admin.config-index-tickets') }}</a></li>
            <li><a data-toggle="tab" href="#email-configs">{{ trans('ticketit::admin.config-index-notifications') }}</a></li>
            <li><a data-toggle="tab" href="#perms-configs">{{ trans('ticketit::admin.config-index-permissions') }}</a></li>
            <li><a data-toggle="tab" href="#editor-configs">{{ trans('ticketit::admin.config-index-editor') }}</a></li>
            <li><a data-toggle="tab" href="#other-configs">{{ trans('ticketit::admin.config-index-other') }}</a></li>
        </ul>
    <br />
        <div class="tab-content">
            <?php $admin_route = $setting->grab('admin_route'); ?>
            <div id="init-configs" class="tab-pane fade in active">
                @include('ticketit::admin.configuration.tables.init_table', ['configs' => $configurations_by_sections['init'], 'admin_route' => $admin_route])
            </div>
            <div id="ticket-configs" class="tab-pane fade">
                @include('ticketit::admin.configuration.tables.ticket_table', ['configs' => $configurations_by_sections['tickets'], 'admin_route' => $admin_route])
            </div>
            <div id="email-configs" class="tab-pane fade">
                @include('ticketit::admin.configuration.tables.email_table', ['configs' => $configurations_by_sections['email'], 'admin_route' => $admin_route])
            </div>
            <div id="perms-configs" class="tab-pane fade">
                @include('ticketit::admin.configuration.tables.perms_table', ['configs' => $configurations_by_sections['perms'], 'admin_route' => $admin_route])
            </div>
            <div id="editor-configs" class="tab-pane fade">
                @include('ticketit::admin.configuration.tables.editor_table', ['configs' => $configurations_by_sections['editor'], 'admin_route' => $admin_route])
            </div>
            <div id="other-configs" class="tab-pane fade">
                @include('ticketit::admin.configuration.tables.other_table', ['configs' => $configurations_by_sections['other'], 'admin_route' => $admin_route])
            </div>
        </div>
    @endif
    {{--@include('ticketit::admin.configuration.common.paginate', ['records' => $configurations])--}}
</div>
<!-- // Configuration -->

@endsection
