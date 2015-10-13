            <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <th class="text-center">{{ trans('ticketit::admin.table-hash') }}</th>
          <th>{{ trans('ticketit::admin.table-slug') }}</th>
          <th>{{ trans('ticketit::admin.table-default') }}</th>
          <th>{{ trans('ticketit::admin.table-value') }}</th>
          <th class="text-center">{{ trans('ticketit::admin.table-lang') }}</th>
          <th class="text-center">{{ trans('ticketit::admin.table-edit') }}</th>
        </thead>
        <tbody>
@foreach($configurations as $configuration)
          <tr>
            <td class="text-center">{!! $configuration->id !!}</td>
            <td>{!! $configuration->slug !!}</td>
            <td>{!! $configuration->default !!}</td>
            <td><a href="{!! route($setting->grab('admin_route').'.configuration.edit', [$configuration->id]) !!}" title="{{ trans('ticketit::admin.table-edit').' '.$configuration->slug }}" data-toggle="tooltip">{!! $configuration->value !!}</a></td>
            <td class="text-center">{!! $configuration->lang !!}</td>
            <td class="text-center">
              {!! link_to_route(
                  $setting->grab('admin_route').'.configuration.edit', trans('ticketit::admin.btn-edit'), [$configuration->id],
                  ['class' => 'btn btn-info', 'title' => trans('ticketit::admin.table-edit').' '.$configuration->slug,  'data-toggle' => 'tooltip'] )
              !!}             
            </td>
          </tr>
@endforeach
        </tbody>
      </table>
    </div>
