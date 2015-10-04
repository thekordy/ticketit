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
	<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script>
	    $('.table').DataTable({
	        processing: false,
	        serverSide: true,
        	lengthMenu: {{ json_encode(config('ticketit.length_menu')) }},
	        ajax: '{!! route(config('ticketit.main_route').'.data', $complete) !!}',
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
