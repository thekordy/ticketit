@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.status-create-title'))

@section('ticketit_content') 
    {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.status.store', 'method' => 'POST', 'class' => '']) !!}
        @include('ticketit::admin.status.form')
    {!! CollectiveForm::close() !!}
@stop
