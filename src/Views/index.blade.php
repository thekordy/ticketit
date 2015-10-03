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
	        processing: true,
	        serverSide: true,
		    "ajax": {
		        "dataType": "json",
		        "contentType": "application/json; charset=utf-8",
		        "type": "POST",
		        "url": "Default.aspx/GetSearchResults",
		        "data": function (d) {
		           return JSON.stringify(d);
		        },
		        "dataSrc": function(json){
		           json = $.parseJSON(json.d);

		           return json.data;
		        },
		    },

	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'subject', name: 'subject' },
	        ]
	    });
	</script>
@endsection