<?php
namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PrepareStatusRequest;
use App\Http\Controllers\Controller;
use Kordy\Ticketit\Models\Status;
use Illuminate\Support\Facades\Session;

class StatusesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $statuses = Status::all();
        return view('ticketit::admin.status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ticketit::admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PrepareStatusRequest $request)
    {
        $status = new Status;
        $status->create(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', "The status $request->name has been created!");

        return redirect()->action('\Kordy\Ticketit\Controllers\StatusesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return "All status related tickets here";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $status = Status::findOrFail($id);
        return view('ticketit::admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PrepareStatusRequest $request, $id)
    {
        $status = Status::findOrFail($id);
        $status->update(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', "The status $request->name has been modified!");

        return redirect()->action('\Kordy\Ticketit\Controllers\StatusesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $name = $status->name;
        $status->delete();

        Session::flash('status', "The status $name has been modified!");

        return redirect()->action('\Kordy\Ticketit\Controllers\StatusesController@index');
    }
}