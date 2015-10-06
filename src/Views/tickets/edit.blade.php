<div class="modal fade" id="ticket-edit-modal" tabindex="-1" role="dialog" aria-labelledby="ticket-edit-modal-Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 700px">
            {!! Form::model($ticket, [
                                   'route' => [config('ticketit.main_route').'.update', $ticket->id],
                                   'method' => 'PATCH',
                                   'class' => 'form-horizontal'
                                   ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ticket-edit-modal-Label">{{ $ticket->subject }}</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    {{--@if(Kordy\Ticketit\Models\Agent::isAdmin())--}}
                    <div class="form-group">
                        {!! Form::text('subject', $ticket->subject, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('content', $ticket->content, ['class' => 'form-control', 'rows' => '5', 'required']) !!}
                    </div>
                    {{--@endif--}}
                    <div class="form-inline row">
                    
                        <div class="form-group col-lg-6">
                            {!! Form::label('status_id', 'Status:', ['class' => 'col-lg-4 control-label']) !!}
                            <div class="col-lg-8">
                                {!! Form::select('status_id', $status_lists, $ticket->status_id, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            {!! Form::label('priority_id', 'Priority:', ['class' => 'col-lg-4 control-label']) !!}
                            <div class="col-lg-8">
                                {!! Form::select('priority_id', $priority_lists, $ticket->priority_id, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-inline row">
                        <div class="form-group col-lg-6">
                            {!! Form::label('category_id', 'Category:', ['class' => 'col-lg-4 control-label']) !!}
                            <div class="col-lg-8">
                                {!! Form::select(
                                        'category_id',
                                        $category_lists,
                                        $ticket->category_id,
                                        ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            {!! Form::label('agent_id', 'Responsible:', ['class' => 'col-lg-4 control-label']) !!}
                            <div class="col-lg-8">
                                {!! Form::select(
                                        'agent_id',
                                        $agent_lists,
                                        $ticket->agent_id,
                                        ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
