@if(Auth::check())
<h2>My Tickets</h2>
<ul class="nav nav-pills nav-stacked">
    <li @if(Html::activeState('ticket.create')) class="active" @endif>
         <a href="{!! route('ticket.create') !!}">
            Create new tickets
        </a>
    </li>

    <li @if(Html::activeState('ticket.pending')) class="active" @endif>
         <a href="{!! route('ticket.pending') !!}">
            Pending tickets
            <span class="badge pull-right">
                {!! \App\Ticket::userCount('pending') !!}
            </span>
        </a>
    </li>
    <li @if(Html::activeState('ticket.solved')) class="active" @endif>
         <a href="{!! route('ticket.solved') !!}">
            Resolved tickets
            <span class="badge pull-right">
                {!! \App\Ticket::userCount('solved') !!}
            </span>
        </a>
    </li>
    <li @if(Html::activeState('ticket.index')) class="active" @endif>
         <a href="{!! route('ticket.index') !!}">
            All tickets
            <span class="badge pull-right">
                {!! \App\Ticket::userCount('all') !!}
            </span>
        </a>
    </li>
</ul>
@endif
