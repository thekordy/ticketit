@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.category-create-title'))

@section('ticketit_content')
    {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.category.store', 'method' => 'POST', 'class' => '']) !!}
        @include('ticketit::admin.category.form')
    {!! CollectiveForm::close() !!}
@stop
