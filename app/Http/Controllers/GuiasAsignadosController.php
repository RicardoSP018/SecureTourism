<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GuiasAsignado;
use Illuminate\Http\Request;

class GuiasAsignadosController extends Controller
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
            $guiasasignados = GuiasAsignado::where('paquete_id', 'LIKE', "%$keyword%")
                ->orWhere('guia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $guiasasignados = GuiasAsignado::latest()->paginate($perPage);
        }

        return view('guias-asignados.index', compact('guiasasignados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('guias-asignados.create');
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
        
        GuiasAsignado::create($requestData);

        return redirect('guias-asignados')->with('flash_message', 'GuiasAsignado added!');
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
        $guiasasignado = GuiasAsignado::findOrFail($id);

        return view('guias-asignados.show', compact('guiasasignado'));
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
        $guiasasignado = GuiasAsignado::findOrFail($id);

        return view('guias-asignados.edit', compact('guiasasignado'));
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
        
        $guiasasignado = GuiasAsignado::findOrFail($id);
        $guiasasignado->update($requestData);

        return redirect('guias-asignados')->with('flash_message', 'GuiasAsignado updated!');
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
        GuiasAsignado::destroy($id);

        return redirect('guias-asignados')->with('flash_message', 'GuiasAsignado deleted!');
    }
}
