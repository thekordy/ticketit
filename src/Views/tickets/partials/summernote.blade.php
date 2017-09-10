@if($data['editor_enabled'])

    @if($data['codemirror_enabled'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/{{Kordy\Ticketit\Helpers\Cdn::CodeMirror}}/mode/xml/xml.min.js"></script>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/summernote.min.js"></script>
    @if( $data['editor_locale'] )
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/{{Kordy\Ticketit\Helpers\Cdn::Summernote}}/lang/summernote-{{ $data['editor_locale'] }}.min.js"></script>
    @endif
    <script>
        $(function() {

            var options = $.extend(true, {lang: '{{ $data['editor_locale'] }}' {!! $data['codemirror_enabled'] ? ", codemirror: {theme: '{$data['codemirror_theme']}', mode: 'text/html', htmlMode: true, lineWrapping: true}" : ''  !!} } , {!! $data['editor_options'] !!});

            $("textarea.summernote-editor").summernote(options);

            $("label[for=content]").click(function () {
                $("#content").summernote("focus");
            });
        });


    </script>
@endif