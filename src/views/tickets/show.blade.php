@extends('master')
@section('title', 'View a ticket')
@section('content')

        @include('partials.ticket_body')
        @include('partials.comments')
        @include('partials.comment_form')

@endsection