<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DispositivosAsignado;
use Illuminate\Http\Request;

class DispositivosAsignadosController extends Controller
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
            $dispositivosasignados = DispositivosAsignado::where('Inicio', 'LIKE', "%$keyword%")
                ->orWhere('Final', 'LIKE', "%$keyword%")
                ->orWhere('dispositivo_id', 'LIKE', "%$keyword%")
                ->orWhere('paqueteAd_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $dispositivosasignados = DispositivosAsignado::latest()->paginate($perPage);
        }

        return view('dispositivos-asignados.index', compact('dispositivosasignados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dispositivos-asignados.create');
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
        
        DispositivosAsignado::create($requestData);

        return redirect('dispositivos-asignados')->with('flash_message', 'DispositivosAsignado added!');
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
        $dispositivosasignado = DispositivosAsignado::findOrFail($id);

        return view('dispositivos-asignados.show', compact('dispositivosasignado'));
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
        $dispositivosasignado = DispositivosAsignado::findOrFail($id);

        return view('dispositivos-asignados.edit', compact('dispositivosasignado'));
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
        
        $dispositivosasignado = DispositivosAsignado::findOrFail($id);
        $dispositivosasignado->update($requestData);

        return redirect('dispositivos-asignados')->with('flash_message', 'DispositivosAsignado updated!');
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
        DispositivosAsignado::destroy($id);

        return redirect('dispositivos-asignados')->with('flash_message', 'DispositivosAsignado deleted!');
    }
}
