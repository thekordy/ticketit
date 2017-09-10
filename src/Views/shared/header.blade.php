@include('ticketit::shared.assets')
@widget('\Kordy\Ticketit\Widgets\Nav', ['uid' => auth()->user()->id, 'admin_route' => $setting->grab('admin_route')])
@include('ticketit::shared.errors')