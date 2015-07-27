<div class="panel panel-default">
    <div class="panel-body">
        @if (session('status'))
            @include('partials.flash')
        @endif
        <div class="content">
            <h2 class="header">{!! $ticket->title !!}</h2>
            <hr>
            <div class="col-md-12">
                <div class="col-md-6">
                    <p> <strong>User</strong>: {!! $ticket->user->name !!}</p>
                    <p>
                        <strong>Status</strong>:
                        <span class="{!! $ticket->status ? 'text-success' : 'text-danger' !!}">
                            {!! $ticket->status ? 'Resolved' : 'Pending' !!}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p> <strong>Created</strong>: {!! $ticket->created_at->diffForHumans() !!}</p>
                    <p> <strong>Last Update</strong>: {!! $ticket->updated_at->diffForHumans() !!}</p>
                </div>
            </div>
            <br>
            <hr>
            <hr>
            <div class="col-md-12">
                <p> {!! nl2br(e($ticket->content)) !!} </p>
            </div>
        </div>
        <div class="text-right col-md-12">
            @if(Auth::user()->tickets_role == 'admin')
                {!! Form::open(['method' => 'DELETE', 'route' => ['ticket.destroy', $ticket->id], 'class' => 'pull-right']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-link text-danger', 'onclick'=>'return confirm("Are you sure?")']) !!}
                {!! Form::close() !!}
            @endif
            {{--{!! link_to_route('ticket.edit', 'Edit', $ticket->slug, ['class' => 'btn btn-primary']) !!}--}}

            @if($ticket->status == 0)
                {!! Form::model($ticket, ['route' => ['ticket.update', $ticket->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                    {!! Form::hidden('status', 1) !!}
                    {!! Form::submit('Resolved', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
</div>