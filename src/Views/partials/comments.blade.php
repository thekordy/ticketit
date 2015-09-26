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
               </div>
               @if(Auth::user()->tickets_role == 'admin')
               {!! Form::open(['method' => 'DELETE', 'route' => ['comment.destroy', $comment->id], 'class' => 'pull-right']) !!}
               {!! Form::submit('Delete', ['class' => 'btn btn-link text-danger', 'onclick'=>'return confirm("Are you sure?")']) !!}
               {!! Form::close() !!}
               @endif
           </div>
       </div>
       @endforeach
       @endif