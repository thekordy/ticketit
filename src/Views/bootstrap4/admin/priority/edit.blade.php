@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.priority-edit-title', ['name' => ucwords($priority->name)]))

@section('ticketit_content')
    {!! CollectiveForm::model($priority, [
                                'route' => [$setting->grab('admin_route').'.priority.update', $priority->id],
                                'method' => 'PATCH'
                                ]) !!}
        @include('ticketit::admin.priority.form', ['update', true])
    {!! CollectiveForm::close() !!}
@stop
