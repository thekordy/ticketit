<div class="form-group">
    {!! CollectiveForm::label('name', trans('ticketit::admin.place-create-name') . trans('ticketit::admin.colon'), ['class' => '']) !!}
    {!! CollectiveForm::text('name', isset($place->name) ? $place->name : null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! CollectiveForm::label('color', trans('ticketit::admin.place-create-color') . trans('ticketit::admin.colon'), ['class' => '']) !!}

    {!! CollectiveForm::custom('color', 'color', isset($place->color) ? $place->color : "#000000", ['class' => 'form-control']) !!}
</div>

{!! link_to_route($setting->grab('admin_route').'.place.index', trans('ticketit::admin.btn-back'), null, ['class' => 'btn btn-link']) !!}
@if(isset($place))
    {!! CollectiveForm::submit(trans('ticketit::admin.btn-update'), ['class' => 'btn btn-primary']) !!}
@else
    {!! CollectiveForm::submit(trans('ticketit::admin.btn-submit'), ['class' => 'btn btn-primary']) !!}
@endif