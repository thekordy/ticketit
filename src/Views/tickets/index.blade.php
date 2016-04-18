<div class="panel panel-default">

    <div class="panel-heading">
        <h2>{{ trans('ticketit::lang.index-my-tickets') }}
            <div class="btn-group pull-right" role="group">
                @if( $u->isAgent() || $u->isAdmin() )
                    {!! link_to_route('getemails', 'get emails', null, ['class' => 'btn btn-default']) !!}
                @endif
                {!! link_to_route($setting->grab('main_route').'.create', trans('ticketit::lang.btn-create-new-ticket'), null, ['class' => 'btn btn-primary']) !!}
            </div>
        </h2>
    </div>

    <div class="panel-body">
        <div id="message"></div>

        @include('ticketit::tickets.partials.bootgrid')
    </div>

</div>
