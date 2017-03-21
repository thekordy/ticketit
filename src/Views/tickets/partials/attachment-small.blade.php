<li class="list-group-item">
    <i class="glyphicon glyphicon-paperclip"></i>

    <strong class="media-heading">{{ $attachment->original_filename }}</strong>,
    {{ number_format($attachment->bytes/1024) }} Kb
    <br>
    {!! link_to_route($setting->grab('main_route').'.download-attachment', trans('ticketit::lang.btn-download'), [$attachment->id]) !!}
</li>
