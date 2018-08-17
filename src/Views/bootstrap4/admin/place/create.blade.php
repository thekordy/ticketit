@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.place-create-title'))

@section('ticketit_content')
    {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.place.store', 'method' => 'POST', 'class' => '']) !!}
        @include('ticketit::admin.place.form')
    {!! CollectiveForm::close() !!}
@stop
