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
                    <p> {!! $comment->html !!} </p>
                </div>
            </div>
            @if($comment->attachments->count() > 0)
                <div class="panel-footer">
                    @foreach($comment->attachments as $attachment)
                        @include('ticketit::tickets.partials.attachment', ['attachment' => $attachment])
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
@endif
