<table id="ticketit-tickets" class="ticketit-table table table-condensed table-hover table-striped">
    <thead>
        <tr>
            <td data-column-id="id" data-type="numeric">{{ trans('ticketit::lang.table-id') }}</td>
            <td data-column-id="subject">{{ trans('ticketit::lang.table-subject') }}</td>
            <td data-column-id="status">{{ trans('ticketit::lang.table-status') }}</td>
            <td data-column-id="updated_at">{{ trans('ticketit::lang.table-last-updated') }}</td>
            <td data-column-id="agent_name">{{ trans('ticketit::lang.table-agent') }}</td>
            @if( $u->isAgent() || $u->isAdmin() )
            <td data-column-id="priority">{{ trans('ticketit::lang.table-priority') }}</td>
            <td data-column-id="owner">{{ trans('ticketit::lang.table-owner') }}</td>
            <td data-column-id="category">{{ trans('ticketit::lang.table-category') }}</td>
            @endif
        </tr>
    </thead>
</table>

@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/{{  Kordy\Ticketit\Helpers\Cdn::Bootgrid }}/jquery.bootgrid.min.js"></script>
<script type="text/javascript" >
    $("#ticketit-tickets").bootgrid({
        ajax: true,
        ajaxSettings: {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }

        },
        url: "{{ action('\Kordy\Ticketit\Controllers\TicketsController@data') }}",

        requestHandler: function(request){
            request.page = request.current;
            request.current = undefined;

            request.complete = {{(int) $complete}};

            return request;
        },

        responseHandler: function(response){
            var formatted = {};

            formatted.rows = response.data;
            formatted.current = response.meta.pagination.current_page;
            formatted.rowCount = response.meta.pagination.count;
            formatted.total = response.meta.pagination.total;

            return formatted;
        },

        rowCount: {!!  json_encode(\Kordy\Ticketit\Models\Setting::grab('length_menu')) !!},

        multiSort: false,

        labels: {
            infos: '@lang('ticketit::lang.bootgrid-infos')',
            loading:  '@lang('ticketit::lang.bootgrid-loading')',
            noResults:  '@lang('ticketit::lang.bootgrid-noResults')',
            refresh:  '@lang('ticketit::lang.bootgrid-refresh')',
            search:  '@lang('ticketit::lang.bootgrid-search')'
        }
    });
</script>
@append