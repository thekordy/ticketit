<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('content', 'Body:', ['class' => 'col-lg-2 control-label']) !!}
    <div class="col-lg-10">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
        <span class="help-block">Feel free to ask us any question.</span>
    </div>
</div>
@if($ticket_status['show'])
    <div class="checkbox">
        <label>
            {!! Form::checkbox('status', $ticket_status['value'], $ticket_status['value'] ? 1 : null) !!} Ticket is resolved?
        </label>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! link_to_action('TicketsController@index', 'Cancel', null, ['class' => 'btn btn-default']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>