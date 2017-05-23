@extends($master)

@section('page')
    {{ trans('ticketit::lang.index-title') }}
@stop

@section('content')
    @include('ticketit::shared.header')
    @include('ticketit::tickets.index')
@stop

@section('footer')
	<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="//cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
	<script>
	    $(function(){
			$('#select_agent').select2().on("change", function (e) {				
				window.location.href="{{ URL::to('/').'/'.$setting->grab('main_route') }}"+$(this).val();				
			});
		});
		
		$('.table').DataTable({
	        processing: false,
	        serverSide: true,
	        responsive: true,
            pageLength: {{ $setting->grab('paginate_items') }},
        	lengthMenu: {{ json_encode($setting->grab('length_menu')) }},
	        ajax: '{!! route($setting->grab('main_route').'.data', $complete) !!}',
	        language: {
				decimal:        "{{ trans('ticketit::lang.table-decimal') }}",
				emptyTable:     "{{ trans('ticketit::lang.table-empty') }}",
				info:           "{{ trans('ticketit::lang.table-info') }}",
				infoEmpty:      "{{ trans('ticketit::lang.table-info-empty') }}",
				infoFiltered:   "{{ trans('ticketit::lang.table-info-filtered') }}",
				infoPostFix:    "{{ trans('ticketit::lang.table-info-postfix') }}",
				thousands:      "{{ trans('ticketit::lang.table-thousands') }}",
				lengthMenu:     "{{ trans('ticketit::lang.table-length-menu') }}",
				loadingRecords: "{{ trans('ticketit::lang.table-loading-results') }}",
				processing:     "{{ trans('ticketit::lang.table-processing') }}",
				search:         "{{ trans('ticketit::lang.table-search') }}",
				zeroRecords:    "{{ trans('ticketit::lang.table-zero-records') }}",
				paginate: {
					first:      "{{ trans('ticketit::lang.table-paginate-first') }}",
					last:       "{{ trans('ticketit::lang.table-paginate-last') }}",
					next:       "{{ trans('ticketit::lang.table-paginate-next') }}",
					previous:   "{{ trans('ticketit::lang.table-paginate-prev') }}"
				},
				aria: {
					sortAscending:  "{{ trans('ticketit::lang.table-aria-sort-asc') }}",
					sortDescending: "{{ trans('ticketit::lang.table-aria-sort-desc') }}"
				},
			},
	        columns: [
	            { data: 'id', name: 'ticketit.id' },
	            { data: 'subject', name: 'subject' },
	            { data: 'status', name: 'ticketit_statuses.name' },
	            { data: 'updated_at', name: 'ticketit.updated_at' },
            	@if (session('ticketit_filter_agent')=="" || (!$u->isAgent() && !$u->isAdmin()))
					{ data: 'agent', name: 'users.name' },
				@endif				
	            @if( $u->isAgent() || $u->isAdmin() )
		            { data: 'priority', name: 'ticketit_priorities.name' },
	            	@if (session('ticketit_filter_owner')=="")
						{ data: 'owner', name: 'users.name' },
		            @endif
					{ data: 'category', name: 'ticketit_categories.name' }
	            @endif
	        ]
	    });
	</script>
@append
