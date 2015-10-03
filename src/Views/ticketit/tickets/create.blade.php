@extends($master)
@section('page', trans('ticketit::messages.page_new_ticket_form'))

@section('content')
@include('ticketit::shared.header')
    <div class="well bs-component">
        {!! Form::open([
                        'route'=>config('ticketit.main_route').'.store',
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                        ]) !!}
            <legend>{{ trans('ticketit::messages.create_new_ticket') }}</legend>
            <div class="form-group">
                {!! Form::label('subject', trans('ticketit::messages.create_new_ticket_subject'),
                    ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                    <span class="help-block">{{ trans('ticketit::messages.create_new_ticket_brief_issue') }}</span>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('content', trans('ticketit::messages.create_new_ticket_description'),
                    ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
                    <span class="help-block">{{ trans('ticketit::messages.create_new_ticket_describe_issue') }}</span>
                </div>
            </div>
            <div class="form-inline row">
                <div class="form-group col-lg-4">
                    {!! Form::label('priority', trans('ticketit::messages.create_new_ticket_priority'),
                        ['class' => 'col-lg-6 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::select('priority_id', $priorities, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    {!! Form::label('category', trans('ticketit::messages.create_new_ticket_category'),
                        ['class' => 'col-lg-6 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! link_to_route(config('ticketit.main_route').'.index',
                        trans('ticketit::messages.create_new_ticket_back'), null, ['class' => 'btn btn-default']) !!}
                    {!! Form::submit(trans('ticketit::messages.create_new_ticket_submit'), ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@stop