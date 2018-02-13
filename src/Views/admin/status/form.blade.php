<div class="form-group">
    {!! CollectiveForm::label('name', trans('ticketit::admin.status-create-name') . trans('ticketit::admin.colon'), ['class' => '']) !!}
    {!! CollectiveForm::text('name', isset($status->name) ? $status->name : null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! CollectiveForm::label('color', trans('ticketit::admin.status-create-color') . trans('ticketit::admin.colon'), ['class' => '']) !!}
    {!! CollectiveForm::custom('color', 'color', isset($status->color) ? $status->color : "#000000", ['class' => 'form-control']) !!}
</div>

{!! link_to_route($setting->grab('admin_route').'.status.index', trans('ticketit::admin.btn-back'), null, ['class' => 'btn btn-default']) !!}
@if(isset($status))
    {!! CollectiveForm::submit(trans('ticketit::admin.btn-update'), ['class' => 'btn btn-primary']) !!}
@else
    {!! CollectiveForm::submit(trans('ticketit::admin.btn-submit'), ['class' => 'btn btn-primary']) !!}
@endif
