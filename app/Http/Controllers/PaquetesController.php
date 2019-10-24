<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paquete;
use Illuminate\Http\Request;

class PaquetesController extends Controller
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
            $paquetes = Paquete::where('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('destino', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('imagen', 'LIKE', "%$keyword%")
                ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                ->orWhere('promocion_id', 'LIKE', "%$keyword%")
                ->orWhere('guia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paquetes = Paquete::latest()->paginate($perPage);
        }

        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paquetes.create');
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
			'Nombre' => 'required|min:3|max:20'
		]);
        $requestData = $request->all();
                if ($request->hasFile('imagen')) {
            $requestData['imagen'] = $request->file('imagen')
                ->store('uploads', 'public');
        }

        Paquete::create($requestData);

        return redirect('paquetes')->with('flash_message', 'Paquete added!');
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
        $paquete = Paquete::findOrFail($id);

        return view('paquetes.show', compact('paquete'));
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
        $paquete = Paquete::findOrFail($id);

        return view('paquetes.edit', compact('paquete'));
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
			'Nombre' => 'required|min:3|max:20'
		]);
        $requestData = $request->all();
                if ($request->hasFile('imagen')) {
            $requestData['imagen'] = $request->file('imagen')
                ->store('uploads', 'public');
        }

        $paquete = Paquete::findOrFail($id);
        $paquete->update($requestData);

        return redirect('paquetes')->with('flash_message', 'Paquete updated!');
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
        Paquete::destroy($id);

        return redirect('paquetes')->with('flash_message', 'Paquete deleted!');
    }
}
