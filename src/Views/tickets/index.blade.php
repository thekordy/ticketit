<div class="panel panel-default">

    <div class="panel-heading">
        <h2 style="margin:0;padding:0"> My Tickets
            {!! link_to_route(config('ticketit.main_route').'.create', 'New Ticket', null, ['class' => 'btn btn-primary pull-right']) !!}
        </h2>
    </div>

    <div class="panel-body">
        <div id="message"></div>

        @include('ticketit::tickets.partials.datatable')
    </div>

</div>