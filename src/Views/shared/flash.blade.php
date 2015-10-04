@if(Session::has('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">{{ trans('ticketit::lang.flash-x') }}</button>
        {{ session('status') }}
    </div>
@endif
