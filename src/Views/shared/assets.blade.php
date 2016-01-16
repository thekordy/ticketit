{{-- Load the css file to the header --}}
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
        loadCSS({!! '"'.asset('http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.css').'"' !!});
        @if($include_font_awesome)
            loadCSS({!! '"'.asset('http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css').'"' !!});
        @endif
        @if($codemirror_enabled)
            loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/codemirror.min.css').'"' !!});
            loadCSS({!! '"'.asset('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/theme/'.$codemirror_theme.'.min.css').'"' !!});
        @endif
    @endif
</script>