<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GuiaAsignado;
use Illuminate\Http\Request;

class GuiaAsignadosController extends Controller
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
            $guiaasignados = GuiaAsignado::where('paquete_id', 'LIKE', "%$keyword%")
                ->orWhere('guia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $guiaasignados = GuiaAsignado::latest()->paginate($perPage);
        }

        return view('guia-asignados.index', compact('guiaasignados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('guia-asignados.create');
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
        
        GuiaAsignado::create($requestData);

        return redirect('guia-asignados')->with('flash_message', 'GuiaAsignado added!');
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
        $guiaasignado = GuiaAsignado::findOrFail($id);

        return view('guia-asignados.show', compact('guiaasignado'));
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
        $guiaasignado = GuiaAsignado::findOrFail($id);

        return view('guia-asignados.edit', compact('guiaasignado'));
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
        
        $guiaasignado = GuiaAsignado::findOrFail($id);
        $guiaasignado->update($requestData);

        return redirect('guia-asignados')->with('flash_message', 'GuiaAsignado updated!');
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
        GuiaAsignado::destroy($id);

        return redirect('guia-asignados')->with('flash_message', 'GuiaAsignado deleted!');
    }
}
