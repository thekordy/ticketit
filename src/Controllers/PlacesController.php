<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kordy\Ticketit\Models\Place;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $places = \Cache::remember('ticketit::places', 60, function () {
            return Place::all();
        });

        return view('ticketit::admin.place.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ticketit::admin.place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'color'     => 'required',
        ]);

        $place = new Place();
        $place->create(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', trans('ticketit::lang.place-name-has-been-created', ['name' => $request->name]));

        \Cache::forget('ticketit::places');

        return redirect()->action('\Kordy\Ticketit\Controllers\PlacesController@index');
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
        return trans('ticketit::lang.place-all-tickets-here');
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
        $place = Place::findOrFail($id);

        return view('ticketit::admin.place.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'required',
            'color'     => 'required',
        ]);

        $place = Place::findOrFail($id);
        $place->update(['name' => $request->name, 'color' => $request->color]);

        Session::flash('status', trans('ticketit::lang.place-name-has-been-modified', ['name' => $request->name]));

        \Cache::forget('ticketit::places');

        return redirect()->action('\Kordy\Ticketit\Controllers\PlacesController@index');
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
        $place = Place::findOrFail($id);
        $name = $place->name;
        $place->delete();

        Session::flash('status', trans('ticketit::lang.place-name-has-been-deleted', ['name' => $name]));

        \Cache::forget('ticketit::places');

        return redirect()->action('\Kordy\Ticketit\Controllers\PlacesController@index');
    }
}
