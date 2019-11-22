<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Suscripcione;
use Illuminate\Http\Request;

class SuscripcionesController extends Controller
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
            $suscripciones = Suscripcione::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('inicio', 'LIKE', "%$keyword%")
                ->orWhere('vencimiento', 'LIKE', "%$keyword%")
                ->orWhere('agencia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $suscripciones = Suscripcione::latest()->paginate($perPage);
        }

        return view('suscripciones.index', compact('suscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('suscripciones.create');
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
        
        Suscripcione::create($requestData);

        return redirect('suscripciones')->with('flash_message', 'Suscripcione added!');
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
        $suscripcione = Suscripcione::findOrFail($id);

        return view('suscripciones.show', compact('suscripcione'));
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
        $suscripcione = Suscripcione::findOrFail($id);

        return view('suscripciones.edit', compact('suscripcione'));
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
        
        $suscripcione = Suscripcione::findOrFail($id);
        $suscripcione->update($requestData);

        return redirect('suscripciones')->with('flash_message', 'Suscripcione updated!');
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
        Suscripcione::destroy($id);

        return redirect('suscripciones')->with('flash_message', 'Suscripcione deleted!');
    }
}
