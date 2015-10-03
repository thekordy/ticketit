@if(Session::has('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@endif
