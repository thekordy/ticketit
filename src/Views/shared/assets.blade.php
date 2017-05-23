{{-- Load the css file to the header --}}
<link rel="StyleSheet" href="{{asset('vendor/ticketit/css/select2.min.css')}}">
<script type="text/javascript" src="{{asset('vendor/ticketit/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/ticketit/js/i18n/'.App::getLocale().'.js')}}"></script>
<script type="text/javascript">
    function loadCSS(filename) {
        var file = document.createElement("link");
        file.setAttribute("rel", "stylesheet");
        file.setAttribute("type", "text/css");
        file.setAttribute("href", filename);

        if (typeof file !== "undefined"){
            document.getElementsByTagName("head")[0].appendChild(file)
        }
    }
    loadCSS({!! '"'.asset('//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css').'"' !!});
    loadCSS({!! '"'.asset('//cdn.datatables.net/responsive/1.0.7/css/responsive.bootstrap.min.css').'"' !!});
    @if($editor_enabled)
        loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/' . Kordy\Ticketit\Helpers\Cdn::Summernote . '/summernote.css').'"' !!});
        @if($include_font_awesome)
            loadCSS({!! '"'.asset('https://netdna.bootstrapcdn.com/font-awesome/' . Kordy\Ticketit\Helpers\Cdn::FontAwesome . '/css/font-awesome.min.css').'"' !!});
        @endif
        @if($codemirror_enabled)
            loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/' . Kordy\Ticketit\Helpers\Cdn::CodeMirror . '/codemirror.min.css').'"' !!});
            loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/' . Kordy\Ticketit\Helpers\Cdn::CodeMirror . '/theme/'.$codemirror_theme.'.min.css').'"' !!});
        @endif
    @endif
</script>