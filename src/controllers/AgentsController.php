<?php
namespace Kordy\Ticketit\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AgentsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $agents = User::where('ticketit_agent', 1)->get();
        return view('Ticketit::admin.agent.index', compact('agents'));
    }

    public function create()
    {
        $users = User::all();
        return view('Ticketit::admin.agent.create', compact('users'));
    }

    public function store(Request $request)
    {
        $agents_ids = $request->input('agents');
        $users = User::find($agents_ids);
        foreach ($users as $user) {
            $user->ticketit_agent = true;
            $user->save();
            $users_list[] = $user->name;
        }
        $users_list = implode(',', $users_list);
        Session::flash('status', "Users $users_list are added to agents");
        return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
    }

    public function destroy($id)
    {
        $agent = User::find($id);
        $agent->ticketit_agent = false;
        $agent->save();

        Session::flash('status', "Users $agent->name is removed from agents team");

        return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
    }

}