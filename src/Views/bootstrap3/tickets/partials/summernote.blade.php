@if($editor_enabled)

@if($codemirror_enabled)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/mode/xml/xml.min.js"></script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/summernote.min.js"></script>
@if($editor_locale)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/lang/summernote-{{$editor_locale}}.min.js"></script>
@endif
<script>


    $(function() {

        var options = $.extend(true, {lang: '{{$editor_locale}}' {!! $codemirror_enabled ? ", codemirror: {theme: '{$codemirror_theme}', mode: 'text/html', htmlMode: true, lineWrapping: true}" : ''  !!} } , {!! $editor_options !!});

        $("textarea.summernote-editor").summernote(options);

        $("label[for=content]").click(function () {
            $("#content").summernote("focus");
        });
    });


</script>
@endif