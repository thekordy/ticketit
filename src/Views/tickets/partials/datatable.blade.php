<table class="table table-condensed table-stripe ddt-responsive" class="ticketit-table">
    <thead>
        <tr>
            <td>{{ tkTrans('table-id') }}</td>
            <td>{{ tkTrans('table-subject') }}</td>
            <td>{{ tkTrans('table-status') }}</td>
            <td>{{ tkTrans('table-last-updated') }}</td>
            <td>{{ tkTrans('table-agent') }}</td>
          @if( $u->isAgent() || $u->isAdmin() )
            <td>{{ tkTrans('table-priority') }}</td>
            <td>{{ tkTrans('table-owner') }}</td>
            <td>{{ tkTrans('table-category') }}</td>
          @endif
        </tr>
    </thead>
</table>