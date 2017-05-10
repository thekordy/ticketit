<div class="panel panel-default">
    <div class="panel-body">
        {!! CollectiveForm::open([
            'method' => 'POST',
            'route' => $setting->grab('main_route').'-comment.store',
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data',
        ]) !!}

            {!! CollectiveForm::hidden('ticket_id', $ticket->id ) !!}

            <fieldset>
                <legend>{!! trans('ticketit::lang.reply') !!}</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        {!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => "3"]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! CollectiveForm::label('attachments', trans('ticketit::lang.attachments') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! CollectiveForm::file('attachments[]', ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>

                <div class="text-right col-md-12">
                    {!! CollectiveForm::submit( trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                </div>

            </fieldset>
        {!! CollectiveForm::close() !!}
    </div>
</div>
