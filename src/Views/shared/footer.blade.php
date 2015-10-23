{{-- Load the css file to the header --}}
<script type="text/javascript">
    function loadCSS(filename) {
        var file = document.createElement("link")
        file.setAttribute("rel", "stylesheet")
        file.setAttribute("type", "text/css")
        file.setAttribute("href", filename)

        if (typeof file !== "undefined")
            document.getElementsByTagName("head")[0].appendChild(file)
    }
    loadCSS({!! '"'.asset('/vendor/ticketit/css/style.css').'"' !!})
</script>