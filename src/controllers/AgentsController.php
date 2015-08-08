<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Ticket;

class AgentsController extends Controller {

	public function index() {
		$agents = Agent::where('ticketit_agent', 1)->get();
		return view('Ticketit::admin.agent.index', compact('agents'));
	}

	public function create() {
		$users = Agent::all();
		return view('Ticketit::admin.agent.create', compact('users'));
	}

	public function store(Request $request) {
		$agents_list = $this->addAgents($request->input('agents'));
		$agents_names = implode(',', $agents_list);

		Session::flash('status', "Agents $agents_names are added to agents");

		return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
	}

	public function update($id, Request $request) {
		$this->syncAgentCategories($id, $request);

		Session::flash('status', "Joint categories successfully");

		return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
	}

	public function destroy($id) {
		$agent = $this->removeAgent($id);

		Session::flash('status', "Agents $agent->name is removed from agents team");

		return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
	}

	/**
	 * Assign users as agents
	 *
	 * @param $user_ids
	 * @return array
	 */
	public function addAgents($user_ids) {
		$users = Agent::find($user_ids);
		foreach ($users as $user) {
			$user->ticketit_agent = true;
			$user->save();
			$users_list[] = $user->name;
		}
		return $users_list;
	}

	/**
	 * Remove user from the agents
	 * @param $id
	 * @return mixed
	 */
	public function removeAgent($id) {
		$agent = Agent::find($id);
		$agent->ticketit_agent = false;
		$agent->save();

		return $agent;
	}

	/**
	 * Sync Agent categories with the selected categories got from update form
	 * @param $id
	 * @param Request $request
	 */
	public function syncAgentCategories($id, Request $request)
	{
		$form_cats = ($request->input('agent_cats') == null) ? [] : $request->input('agent_cats');
		$agent = Agent::find($id);
		$agent->categories()->sync($form_cats);
	}

    public function agentsSelectList($category_id,$ticket_id)
    {
        $agents = Agent::agentsList($category_id);
        $selected_Agent = Ticket::find($ticket_id)->agent->id;
        $select = '<select class="form-control" id="agent_id" name="agent_id">';
        foreach ($agents as $id => $name) {
            $selected = ($id == $selected_Agent) ? "selected" : "";
            $select .= '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
        }
        $select .= '</select>';
        return $select;
    }

}