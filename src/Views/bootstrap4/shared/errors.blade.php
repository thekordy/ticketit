@if($errors->first() != '')
    <div class="container">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span></button>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('warning'))
    <div class="container">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span></button>
            {{ session('warning') }}
        </div>
    </div>
@endif
@if(Session::has('status'))
    <div class="container">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span></button>
            {{ session('status') }}
        </div>
    </div>
@endif
