@extends('ticketit::layouts.master')
@section('page', trans('ticketit::admin.category-edit-title', ['name' => ucwords($category->name)]))

@section('ticketit_content')
    {!! CollectiveForm::model($category, [
                                'route' => [$setting->grab('admin_route').'.category.update', $category->id],
                                'method' => 'PATCH',
                                'class' => ''
                                ]) !!}
        @include('ticketit::admin.category.form', ['update', true])
    {!! CollectiveForm::close() !!}
@stop
