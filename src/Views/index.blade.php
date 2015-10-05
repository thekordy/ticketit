@extends($master)

@section('page')
    {{ trans('ticketit::lang.index-title') }}
@stop

@section('content')
    <div class="row">
        @include('ticketit::shared.header')
        @include('ticketit::tickets.index')
    </div>
@stop

@section('footer')
	<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="//cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
	<script>
	    $('.table').DataTable({
	        processing: false,
	        serverSide: true,
	        responsive: true,
        	lengthMenu: {{ json_encode(config('ticketit.length_menu')) }},
	        ajax: '{!! route(config('ticketit.main_route').'.data', $complete) !!}',
	        language: {
				decimal:        "",
				emptyTable:     "No data available in table",
				info:           "Showing _START_ to _END_ of _TOTAL_ entries",
				infoEmpty:      "Showing 0 to 0 of 0 entries",
				infoFiltered:   "(filtered from _MAX_ total entries)",
				infoPostFix:    "",
				thousands:      ",",
				lengthMenu:     "Show _MENU_ entries",
				loadingRecords: "Loading...",
				processing:     "Processing...",
				search:         "Search:",
				zeroRecords:    "No matching records found",
				paginate: {
					first:      "First",
					last:       "Last",
					next:       "Next",
					previous:   "Previous"
				},
				aria: {
					sortAscending:  ": activate to sort column ascending",
					sortDescending: ": activate to sort column descending"
				},
			},
	        columns: [
	            { data: 'id', name: 'ticketit.id' },
	            { data: 'subject', name: 'ticketit.subject' },
	            { data: 'status', name: 'ticketit_statuses.name' },
	            { data: 'updated_at', name: 'ticketit.updated_at' },
	            { data: 'last_responder', name: 'users.name' },
	            @if( $u->isAgent() || $u->isAdmin() )
		            { data: 'priority', name: 'ticketit_priorities.name' },
		            { data: 'name', name: 'users.name' },
		            { data: 'category', name: 'ticketit_categories.name' }
	            @endif
	        ]
	    });
	</script>
@endsection
