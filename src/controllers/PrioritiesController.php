<?php
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Priority;

class PrioritiesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $priorities = Priority::all();
        return view('Ticketit::admin.priority.index', compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Ticketit::admin.priority.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $priority = new Priority;
        $priority->create(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', "The priority $request->name has been created!");

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return "All priority related tickets here";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $priority = Priority::findOrFail($id);
        return view('Ticketit::admin.priority.edit', compact('priority'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $priority = Priority::findOrFail($id);
        $priority->update(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', "The priority $request->name has been modified!");

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $priority = Priority::findOrFail($id);
        $name = $priority->name;
        $priority->delete();

        Session::flash('status', "The priority $name has been modified!");

        return redirect()->action('\Kordy\Ticketit\Controllers\PrioritiesController@index');
    }
}