@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        <div class="card mb-3 {!! $comment->user->tickets_role ? "border-info" : "" !!}">
            <div class="card-header d-flex justify-content-between align-items-baseline flex-wrap {!! $comment->user->tickets_role ? "bg-info text-white" : "" !!}">
                <div>{!! $comment->user->name !!}</div>
                <div>{!! $comment->created_at->diffForHumans() !!}</div>
            </div>
            <div class="card-body pb-0">
                {!! $comment->html !!}
            </div>
        </div>
    @endforeach
@endif