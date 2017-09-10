@extends($master)

@section('page')
    {{ tkTrans('index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    @include('ticketit::tickets.index')
@stop

@section('footer')
	<script src="//cdn.datatables.net/v/bs/dt-{{ Kordy\Ticketit\Helpers\Cdn::DataTables }}/r-{{ Kordy\Ticketit\Helpers\Cdn::DataTablesResponsive }}/datatables.min.js"></script>
	<script>
	    $('.table').DataTable({
	        processing: false,
	        serverSide: true,
	        responsive: true,
            pageLength: {{ $setting->grab('paginate_items') }},
        	lengthMenu: {{ json_encode($setting->grab('length_menu')) }},
	        ajax: '{!! route($setting->grab('main_route').'.data', $complete) !!}',
	        language: {
				decimal:        "{{ tkTrans('table-decimal') }}",
				emptyTable:     "{{ tkTrans('table-empty') }}",
				info:           "{{ tkTrans('table-info') }}",
				infoEmpty:      "{{ tkTrans('table-info-empty') }}",
				infoFiltered:   "{{ tkTrans('table-info-filtered') }}",
				infoPostFix:    "{{ tkTrans('table-info-postfix') }}",
				thousands:      "{{ tkTrans('table-thousands') }}",
				lengthMenu:     "{{ tkTrans('table-length-menu') }}",
				loadingRecords: "{{ tkTrans('table-loading-results') }}",
				processing:     "{{ tkTrans('table-processing') }}",
				search:         "{{ tkTrans('table-search') }}",
				zeroRecords:    "{{ tkTrans('table-zero-records') }}",
				paginate: {
					first:      "{{ tkTrans('table-paginate-first') }}",
					last:       "{{ tkTrans('table-paginate-last') }}",
					next:       "{{ tkTrans('table-paginate-next') }}",
					previous:   "{{ tkTrans('table-paginate-prev') }}"
				},
				aria: {
					sortAscending:  "{{ tkTrans('table-aria-sort-asc') }}",
					sortDescending: "{{ tkTrans('table-aria-sort-desc') }}"
				},
			},
	        columns: [
	            { data: 'id', name: 'ticketit.id' },
	            { data: 'subject', name: 'subject' },
	            { data: 'status', name: 'ticketit_statuses.name' },
	            { data: 'updated_at', name: 'ticketit.updated_at' },
            	{ data: 'agent', name: 'users.name' },
	            @if( $u->isAgent() || $u->isAdmin() )
		            { data: 'priority', name: 'ticketit_priorities.name' },
	            	{ data: 'owner', name: 'users.name' },
		            { data: 'category', name: 'ticketit_categories.name' }
	            @endif
	        ]
	    });
	</script>
@append
