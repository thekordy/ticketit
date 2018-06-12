@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.priority-create-title'))

@section('ticketit_content')
    {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.priority.store', 'method' => 'POST', 'class' => '']) !!}
        @include('ticketit::admin.priority.form')
    {!! CollectiveForm::close() !!}
@stop
