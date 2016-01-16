@if($editor_enabled)

@if($include_jquery)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@endif

@if($codemirror_enabled)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/mode/xml/xml.min.js"></script>
@endif

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.min.js"></script>
@if($editor_locale)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/lang/summernote-{{$editor_locale}}.min.js"></script>
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