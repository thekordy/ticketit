<div class="form-group">
    {!! CollectiveForm::label('name', tkAdminTrans('priority-create-name') . tkAdminTrans('colon'), ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! CollectiveForm::text('name', isset($priority->name) ? $priority->name : null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! CollectiveForm::label('color', tkAdminTrans('priority-create-color') . tkAdminTrans('colon'), ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! CollectiveForm::custom('color', 'color', isset($priority->color) ? $priority->color : "#000000", ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! link_to_route($setting->grab('admin_route').'.priority.index', tkAdminTrans('btn-back'), null, ['class' => 'btn btn-default']) !!}
        @if(isset($priority))
            {!! CollectiveForm::submit(tkAdminTrans('btn-update'), ['class' => 'btn btn-primary']) !!}
        @else
            {!! CollectiveForm::submit(tkAdminTrans('btn-submit'), ['class' => 'btn btn-primary']) !!}
        @endif
    </div>
</div>
