<div class="panel panel-default">
    <div class="panel-body">
        {!! CollectiveForm::open(['method' => 'POST', 'route' => $setting->grab('main_route').'-comment.store', 'class' => 'form-horizontal']) !!}


            {!! CollectiveForm::hidden('ticket_id', $ticket->id ) !!}

            <fieldset>
                <legend>{!! tkTrans('reply') !!}</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        {!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => "3"]) !!}
                    </div>
                </div>

                <div class="text-right col-md-12">
                    {!! CollectiveForm::submit( tkTrans('btn-submit'), ['class' => 'btn btn-primary']) !!}
                </div>

            </fieldset>
        {!! CollectiveForm::close() !!}
    </div>
</div>
