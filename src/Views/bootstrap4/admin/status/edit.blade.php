@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.status-edit-title', ['name' => ucwords($status->name)]))

@section('ticketit_content') 
    {!! CollectiveForm::model($status, [
                                    'route' => [$setting->grab('admin_route').'.status.update', $status->id],
                                    'method' => 'PATCH'
                                    ]) !!}
        @include('ticketit::admin.status.form', ['update', true])
    {!! CollectiveForm::close() !!}
@stop
