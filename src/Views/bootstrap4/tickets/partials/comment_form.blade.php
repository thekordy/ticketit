{!! CollectiveForm::open(['method' => 'POST', 'route' => $setting->grab('main_route').'-comment.store', 'class' => '']) !!}


{!! CollectiveForm::hidden('ticket_id', $ticket->id ) !!}


{!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => "3"]) !!}

{!! CollectiveForm::submit( trans('ticketit::lang.reply'), ['class' => 'btn btn-outline-primary pull-right mt-3 mb-3']) !!}

{!! CollectiveForm::close() !!}
    