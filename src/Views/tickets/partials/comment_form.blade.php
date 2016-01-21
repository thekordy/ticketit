<div class="panel panel-default">
    <div class="panel-body">
        {!! CollectiveForm::open(['method' => 'POST', 'route' => $setting->grab('main_route').'-comment.store', 'files' => true, 'class' => 'form-horizontal']) !!}


            {!! CollectiveForm::hidden('ticket_id', $ticket->id ) !!}

            <fieldset>
                <legend>{!! trans('ticketit::lang.reply') !!}</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        {!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => "3"]) !!}
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    {!! CollectiveForm::label('file_upload', trans('ticketit::lang.file-upload') . trans('ticketit::lang.colon'), ['class' => 'col-lg-12']) !!}
                    <div class="col-lg-12">
                        {!! CollectiveForm::file('file_upload', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                @if( $u->isAgent() || $u->isAdmin() )
                    <div class="form-group col-lg-3">
                        {!!  CollectiveForm::label('time', trans('ticketit::lang.time-spent') . trans('ticketit::lang.colon'), ['class' => 'col-lg-6 control-label']) !!}
                        <div class="col-lg-6">
                            {!! CollectiveForm::text('time_spent', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group col-lg-3">
                        {!!  CollectiveForm::label('private', trans('ticketit::lang.private') . trans('ticketit::lang.colon'), ['class' => 'col-lg-10 control-label']) !!}
                        <div class="col-lg-2">
                            {!! CollectiveForm::checkbox('private', 1, false, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="text-right col-md-3">
                        {!! CollectiveForm::submit( trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                    </div>
                @else
                    <div class="text-right col-md-9">
                        {!! CollectiveForm::submit( trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                    </div>
                @endif

            </fieldset>
        {!! CollectiveForm::close() !!}
    </div>
</div>
