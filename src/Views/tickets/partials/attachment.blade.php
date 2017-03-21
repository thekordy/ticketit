<div class="media">
    <div class="media-left">
        <i class="glyphicon glyphicon-paperclip"></i>
    </div>
    <div class="media-body">
        <h4 class="media-heading">{{ $attachment->original_filename }}</h4>

        {!! link_to_route($setting->grab('main_route').'.download-attachment', trans('ticketit::lang.btn-download'), [$attachment->id]) !!}
        <span class="text-muted">
            {{ number_format($attachment->bytes/1024) }} Kb,
            {{ $attachment->mimetype }}
        </span>
    </div>
</div>
