<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script>
    function formatData(data) {
        if (data.loading)
            return "Searching...";

        //This is where you format your search results. 
        var markup = "<div class='row'><div class='col-lg-2'>" + data.name + "</div>" +
                "<div class='col-lg-2'>" + data.email + "</div>" +
                "<div class='col-lg-12 pull-left'>" + data.phone_1 + "</div></div>";

        return markup;
    }

    function formatDataSelection(data) {
        //This is where you choose the selection display
        return data.name;
    }
    $("#user").select2({
        ajax: {
            url: "/user-search",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term // search term
                };
            },
            processResults: function (data) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                return {
                    results: data
                };
            },
            cache: true
        },
        minimumInputLength: 2,
        escapeMarkup: function ($markup) {
            return $markup;
        },
        templateResult: formatData,
        templateSelection: formatDataSelection
    });
</script>