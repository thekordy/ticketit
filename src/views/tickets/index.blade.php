@extends('master')
@if(Html::activeState('ticket.pending'))
    @section('title', 'Pending Support tickets')
@elseif(Html::activeState('ticket.solved'))
    @section('title', 'Resolved Support tickets')
@else
    @section('title', 'All Support tickets')
@endif


@section('content')
        @if(Html::activeState('ticket.pending'))
            @include('partials.pending')
        @elseif(Html::activeState('ticket.solved'))
            @include('partials.solved')
        @elseif(Html::activeState('ticket.index'))
            @include('partials.all_tickets')
        @endif
@stop