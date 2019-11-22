<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Waypoint;
use Illuminate\Http\Request;

class WaypointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $waypoints = Waypoint::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('dispositivoA_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $waypoints = Waypoint::latest()->paginate($perPage);
        }

        return view('waypoints.index', compact('waypoints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('waypoints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Waypoint::create($requestData);

        return redirect('waypoints')->with('flash_message', 'Waypoint added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $waypoint = Waypoint::findOrFail($id);

        return view('waypoints.show', compact('waypoint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $waypoint = Waypoint::findOrFail($id);

        return view('waypoints.edit', compact('waypoint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $waypoint = Waypoint::findOrFail($id);
        $waypoint->update($requestData);

        return redirect('waypoints')->with('flash_message', 'Waypoint updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Waypoint::destroy($id);

        return redirect('waypoints')->with('flash_message', 'Waypoint deleted!');
    }
}
