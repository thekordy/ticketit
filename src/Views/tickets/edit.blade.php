<div class="modal fade" id="ticket-edit-modal" tabindex="-1" role="dialog" aria-labelledby="ticket-edit-modal-Label">
    <div class="modal-dialog model-lg" role="document">
        <div class="modal-content">
            {!! Form::model($ticket, [
                 'route' => [config('ticketit.main_route').'.update', $ticket->id],
                 'method' => 'PATCH',
                 'class' => 'form-horizontal'
             ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span></button>
                <h4 class="modal-title" id="ticket-edit-modal-Label">{{ $ticket->subject }}</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    @if(Kordy\Ticketit\Models\Agent::isAdmin())
                        <div class="form-group">
                            {!! Form::text('subject', $ticket->subject, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('content', $ticket->content, [
                                'class' => 'form-control', 'rows' => '5', 'required'
                            ]) !!}
                        </div>
                    @endif

                    <div class="form-group col-lg-6">
                        {!! Form::label('priority_id', trans('ticketit::lang.priority') . trans('ticketit::lang.colon'), ['class' => 'col-lg-4 control-label']) !!}
                        <div class="col-lg-8">
                            {!! Form::select('priority_id', $priority_lists, $ticket->priority_id, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        {!! Form::label('agent_id', trans('ticketit::lang.agent') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-4 control-label'
                        ]) !!}
                        <div class="col-lg-8">
                            {!! Form::select(
                                'agent_id',
                                $agent_lists,
                                $ticket->agent_id,
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group col-lg-12">
                        {!! Form::label('category_id',  trans('ticketit::lang.category') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-6 control-label'
                        ]) !!}
                        <div class="col-lg-6">
                            {!! Form::select('category_id', $category_lists, $ticket->category_id, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        {!! Form::label('status_id', trans('ticketit::lang.status') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-6 control-label'
                        ]) !!}
                        <div class="col-lg-6">
                            {!! Form::select('status_id', $status_lists, $ticket->status_id, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('ticketit::lang.btn-close') }}</button>
                        {!! Form::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
