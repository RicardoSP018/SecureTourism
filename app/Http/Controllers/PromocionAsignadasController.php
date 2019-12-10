<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PromocionAsignada;
use Illuminate\Http\Request;

class PromocionAsignadasController extends Controller
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
            $promocionasignadas = PromocionAsignada::where('paquete_id', 'LIKE', "%$keyword%")
                ->orWhere('promocion_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promocionasignadas = PromocionAsignada::latest()->paginate($perPage);
        }

        return view('promocion-asignadas.index', compact('promocionasignadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('promocion-asignadas.create');
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
        
        PromocionAsignada::create($requestData);

        return redirect('promocion-asignadas')->with('flash_message', 'PromocionAsignada added!');
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
        $promocionasignada = PromocionAsignada::findOrFail($id);

        return view('promocion-asignadas.show', compact('promocionasignada'));
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
        $promocionasignada = PromocionAsignada::findOrFail($id);

        return view('promocion-asignadas.edit', compact('promocionasignada'));
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
        
        $promocionasignada = PromocionAsignada::findOrFail($id);
        $promocionasignada->update($requestData);

        return redirect('promocion-asignadas')->with('flash_message', 'PromocionAsignada updated!');
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
        PromocionAsignada::destroy($id);

        return redirect('promocion-asignadas')->with('flash_message', 'PromocionAsignada deleted!');
    }
}
