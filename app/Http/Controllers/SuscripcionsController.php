<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionsController extends Controller
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
            $suscripcions = Suscripcion::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('inicio', 'LIKE', "%$keyword%")
                ->orWhere('vencimiento', 'LIKE', "%$keyword%")
                ->orWhere('agencia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $suscripcions = Suscripcion::latest()->paginate($perPage);
        }

        return view('suscripcions.index', compact('suscripcions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('suscripcions.create');
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
        $this->validate($request, [
			'estado' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        Suscripcion::create($requestData);

        return redirect('suscripcions')->with('flash_message', 'Suscripcion added!');
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
        $suscripcion = Suscripcion::findOrFail($id);

        return view('suscripcions.show', compact('suscripcion'));
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
        $suscripcion = Suscripcion::findOrFail($id);

        return view('suscripcions.edit', compact('suscripcion'));
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
        $this->validate($request, [
			'estado' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->update($requestData);

        return redirect('suscripcions')->with('flash_message', 'Suscripcion updated!');
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
        Suscripcion::destroy($id);

        return redirect('suscripcions')->with('flash_message', 'Suscripcion deleted!');
    }
}
