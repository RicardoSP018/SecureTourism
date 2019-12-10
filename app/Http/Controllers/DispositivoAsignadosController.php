<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DispositivoAsignado;
use Illuminate\Http\Request;

class DispositivoAsignadosController extends Controller
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
            $dispositivoasignados = DispositivoAsignado::where('Inicio', 'LIKE', "%$keyword%")
                ->orWhere('Final', 'LIKE', "%$keyword%")
                ->orWhere('dispositivo_id', 'LIKE', "%$keyword%")
                ->orWhere('paquete_adquiridos_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $dispositivoasignados = DispositivoAsignado::latest()->paginate($perPage);
        }

        return view('dispositivo-asignados.index', compact('dispositivoasignados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dispositivo-asignados.create');
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
        
        DispositivoAsignado::create($requestData);

        return redirect('dispositivo-asignados')->with('flash_message', 'DispositivoAsignado added!');
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
        $dispositivoasignado = DispositivoAsignado::findOrFail($id);

        return view('dispositivo-asignados.show', compact('dispositivoasignado'));
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
        $dispositivoasignado = DispositivoAsignado::findOrFail($id);

        return view('dispositivo-asignados.edit', compact('dispositivoasignado'));
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
        
        $dispositivoasignado = DispositivoAsignado::findOrFail($id);
        $dispositivoasignado->update($requestData);

        return redirect('dispositivo-asignados')->with('flash_message', 'DispositivoAsignado updated!');
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
        DispositivoAsignado::destroy($id);

        return redirect('dispositivo-asignados')->with('flash_message', 'DispositivoAsignado deleted!');
    }
}
