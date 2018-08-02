<table class="ticketit-table table table-striped  dt-responsive nowrap" style="width:100%">
    <thead>
        <tr>
            <td>{{ trans('ticketit::lang.table-id') }}</td>
            <td>{{ trans('ticketit::lang.table-subject') }}</td>
            <td>{{ trans('ticketit::lang.table-status') }}</td>
            <td>{{ trans('ticketit::lang.table-last-updated') }}</td>
            <td>{{ trans('ticketit::lang.table-agent') }}</td>
          @if( $u->isAgent() || $u->isAdmin() )
            <td>{{ trans('ticketit::lang.table-priority') }}</td>
            <td>{{ trans('ticketit::lang.table-owner') }}</td>
            <td>{{ trans('ticketit::lang.table-category') }}</td>
          @endif
        </tr>
    </thead>
</table>