<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Category;
use Kordy\Ticketit\Models\Setting;

class AgentsController extends Controller
{
    public function index()
    {
        $agents = Agent::agents()->with('categories')->get();
        $categories = Category::get();

        return view('ticketit::admin.agent.index', compact('agents', 'categories'));
    }

    public function create()
    {
        $users = Agent::paginate(Setting::grab('paginate_items'));

        return view('ticketit::admin.agent.create', compact('users'));
    }

    public function store(Request $request)
    {
        $agents_list = $this->addAgents($request->input('agents'));
        $agents_names = implode(',', $agents_list);

        Session::flash('status', trans('ticketit::lang.agents-are-added-to-agents', ['names' => $agents_names]));

        return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
    }

    public function update($id, Request $request)
    {
        $this->syncAgentCategories($id, $request);

        Session::flash('status', trans('ticketit::lang.agents-joined-categories-ok'));

        return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
    }

    public function destroy($id)
    {
        $agent = $this->removeAgent($id);

        Session::flash('status', trans('ticketit::lang.agents-is-removed-from-team', ['name' => $agent->name]));

        return redirect()->action('\Kordy\Ticketit\Controllers\AgentsController@index');
    }

    /**
     * Assign users as agents.
     *
     * @param $user_ids
     *
     * @return array
     */
    public function addAgents($user_ids)
    {
        $users = Agent::find($user_ids);
        foreach ($users as $user) {
            $user->ticketit_agent = true;
            $user->save();
            $users_list[] = $user->name;
        }

        return $users_list;
    }

    /**
     * Remove user from the agents.
     *
     * @param $id
     *
     * @return mixed
     */
    public function removeAgent($id)
    {
        $agent = Agent::find($id);
        $agent->ticketit_agent = false;
        $agent->save();

        // Remove him from tickets categories as well
        if (version_compare(app()->version(), '5.2.0', '>=')) {
            $agent_cats = $agent->categories->pluck('id')->toArray();
        } else { // if Laravel 5.1
            $agent_cats = $agent->categories->lists('id')->toArray();
        }

        $agent->categories()->detach($agent_cats);

        return $agent;
    }

    /**
     * Sync Agent categories with the selected categories got from update form.
     *
     * @param $id
     * @param Request $request
     */
    public function syncAgentCategories($id, Request $request)
    {
        $form_cats = $fc = ($request->input('agent_cats') == null) ? [] : $request->input('agent_cats');
        $form_auto = ($request->input('agent_cats_autoassign') == null) ? [] : $request->input('agent_cats_autoassign');

        // Attach Autoassign parameter
        if ($form_cats) {
            $form_cats = [];
            foreach ($fc as $cat) {
                $form_cats[$cat] = ['autoassign'=>(in_array($cat, $form_auto) ? '1' : '0')];
            }
        }

        $agent = Agent::find($id);

        // Update Agent Categories in ticketit_categories_users
        $agent->categories()->sync($form_cats);
    }
}
