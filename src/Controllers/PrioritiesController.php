<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models\Priority;
use Kordy\Ticketit\Requests\PreparePriorityRequest;

class PrioritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $priorities = Priority::all();

        return view('ticketit::admin.priority.index', compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ticketit::admin.priority.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(PreparePriorityRequest $request)
    {
        $priority = new Priority();
        $priority->create(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', trans('ticketit::lang.priority-name-has-been-created', ['name' => $request->name]));

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return trans('ticketit::lang.priority-all-tickets-here');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $priority = Priority::findOrFail($id);

        return view('ticketit::admin.priority.edit', compact('priority'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(PreparePriorityRequest $request, $id)
    {
        $priority = Priority::findOrFail($id);
        $priority->update(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', trans('ticketit::lang.priority-name-has-been-modified', ['name' => $request->name]));

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $priority = Priority::findOrFail($id);
        $name = $priority->name;
        $priority->delete();

        Session::flash('status', trans('ticketit::lang.priority-name-has-been-deleted', ['name' => $name]));

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }
}
