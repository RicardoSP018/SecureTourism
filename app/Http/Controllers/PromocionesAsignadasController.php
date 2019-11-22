<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PromocionesAsignada;
use Illuminate\Http\Request;

class PromocionesAsignadasController extends Controller
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
            $promocionesasignadas = PromocionesAsignada::where('paquete_id', 'LIKE', "%$keyword%")
                ->orWhere('promocion_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promocionesasignadas = PromocionesAsignada::latest()->paginate($perPage);
        }

        return view('promociones-asignadas.index', compact('promocionesasignadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('promociones-asignadas.create');
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
        
        PromocionesAsignada::create($requestData);

        return redirect('promociones-asignadas')->with('flash_message', 'PromocionesAsignada added!');
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
        $promocionesasignada = PromocionesAsignada::findOrFail($id);

        return view('promociones-asignadas.show', compact('promocionesasignada'));
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
        $promocionesasignada = PromocionesAsignada::findOrFail($id);

        return view('promociones-asignadas.edit', compact('promocionesasignada'));
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
        
        $promocionesasignada = PromocionesAsignada::findOrFail($id);
        $promocionesasignada->update($requestData);

        return redirect('promociones-asignadas')->with('flash_message', 'PromocionesAsignada updated!');
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
        PromocionesAsignada::destroy($id);

        return redirect('promociones-asignadas')->with('flash_message', 'PromocionesAsignada deleted!');
    }
}
