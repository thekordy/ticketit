<table class="table table-condensed table-stripe ddt-responsive" class="ticketit-table">
    <thead>
        <tr>
	        <td>#</td>
	        <td>Subject</td>
	        <td>Status</td>
	        <td>Update</td>
	        <td>Last Reponder</td>
            @if( $u->isAgent() || $u->isAdmin() )
		        <td>Priority</td>
		        <td>Agent</td>
		        <td>Category</td>
			@endif
        </tr>
    </thead>
</table>