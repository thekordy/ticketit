<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <th class="text-center">{{ tkAdminTrans('table-hash') }}</th>
        <th>{{ tkAdminTrans('table-slug') }}</th>
        <th>{{ tkAdminTrans('table-default') }}</th>
        <th>{{ tkAdminTrans('table-value') }}</th>
        <th class="text-center">{{ tkAdminTrans('table-lang') }}</th>
        <th class="text-center">{{ tkAdminTrans('table-edit') }}</th>
        </thead>
        <tbody>
        @foreach($configurations_by_sections['other'] as $configuration)
            <tr>
                <td class="text-center">{!! $configuration->id !!}</td>
                <td>{!! $configuration->slug !!}</td>
                <td>{!! $configuration->default !!}</td>
                <td><a href="{!! route($setting->grab('admin_route').'.configuration.edit', [$configuration->id]) !!}" title="{{ tkAdminTrans('table-edit').' '.$configuration->slug }}" data-toggle="tooltip">{!! $configuration->value !!}</a></td>
                <td class="text-center">{!! $configuration->lang !!}</td>
                <td class="text-center">
                    {!! link_to_route(
                        $setting->grab('admin_route').'.configuration.edit', tkAdminTrans('btn-edit'), [$configuration->id],
                        ['class' => 'btn btn-info', 'title' => tkAdminTrans('table-edit').' '.$configuration->slug,  'data-toggle' => 'tooltip'] )
                    !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
