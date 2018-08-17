@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.place-edit-title', ['name' => ucwords($place->name)]))

@section('ticketit_content')
    {!! CollectiveForm::model($place, [
                                'route' => [$setting->grab('admin_route').'.place.update', $place->id],
                                'method' => 'PATCH'
                                ]) !!}
        @include('ticketit::admin.place.form', ['update', true])
    {!! CollectiveForm::close() !!}
@stop
