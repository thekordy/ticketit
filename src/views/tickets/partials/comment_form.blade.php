<div class="panel panel-default">
    <div class="panel-body">
        {!! Form::open(['method' => 'POST', 'route' => config('ticketit.main_route').'-comment.store', 'class' => 'form-horizontal']) !!}


            {!! Form::hidden('ticket_id', $ticket->id ) !!}

            <fieldset>
                <legend>Reply</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => "3"]) !!}
                    </div>
                </div>

                <div class="text-right col-md-12">
                    {!! Form::submit('Submit Reply', ['class' => 'btn btn-primary']) !!}
                </div>

            </fieldset>
        {!! Form::close() !!}
    </div>
</div>