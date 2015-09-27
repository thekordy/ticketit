@extends($master)
@section('page', 'Add users')

@section('content')
    @include('ticketit::shared.admin-header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Add agents</h2>
        </div>
        @if ($users->isEmpty())
            <h3 class="text-center"> There are no user accounts, create user accounts first.</h3>
        @else
            {!! Form::open(['route'=> config('ticketit.admin_route').'.agent.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <div class="panel-body">
                Select user accounts to be added as agents
            </div>
            <table class="table table-hover">
                <tfoot>
                    <tr>
                        <td class="text-center">
                            {!! link_to_route(config('ticketit.admin_route').'.agent.index', 'Back', null, ['class' => 'btn btn-default']) !!}
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </td>
                    </tr>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input name="agents[]" type="checkbox" value="{{ $user->id }}" {!! $user->ticketit_agent ? "checked" : "" !!}> {{ $user->name }}
                                </label>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! Form::close() !!}
        @endif
    </div>
    {!! $users->render() !!}
@stop