@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-default" !!}">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {!! $comment->user->name !!}
                    <span class="pull-right"> {!! $comment->created_at->diffForHumans() !!} </span>
                </h3>
            </div>
            <div class="panel-body">
                <div class="content">
                    <p> {!! nl2br(e($comment->content)) !!} </p>
                    @if( $u->isAgent() || $u->isAdmin() )
                        @if( $comment->time_spent != NULL)
                        <span class="pull-right"><strong>{{ trans('ticketit::lang.time-spent') }}</strong>{{ trans('ticketit::lang.colon') }}
                            {{ $comment->time_spent }} Minutes</span>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endif