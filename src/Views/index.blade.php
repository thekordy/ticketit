@extends($master)

@section('page')
    Helpdesk main page
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
	        ajax: '{!! route(config('ticketit.main_route').'.data', $complete) !!}',
	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'subject', name: 'subject' },
	            { data: 'status_id', name: 'status_id' },
	            { data: 'updated_at', name: 'updated_at' },
	            { data: 'priority_id', name: 'priority_id' },
	            { data: 'agent_id', name: 'agent_id' },
	            { data: 'category_id', name: 'category_id' }
	        ]
	    });
	</script>
@endsection