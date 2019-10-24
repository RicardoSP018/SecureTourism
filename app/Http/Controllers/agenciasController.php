<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\suscripcione;
use App\usuario;
use App\agencia;
use Illuminate\Http\Request;

class agenciasController extends Controller
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
            $agencias = agencia::where('NombreAgencia', 'LIKE', "%$keyword%")
                ->orWhere('NombreDueno', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->orWhere('Descripcion', 'LIKE', "%$keyword%")
                ->orWhere('Direccion', 'LIKE', "%$keyword%")
                ->orWhere('usuario_id', 'LIKE', "%$keyword%")
                ->orWhere('suscripcion_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $agencias = agencia::latest()->paginate($perPage);
        }

        return view('agencias.index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $suscripciones = suscripcione::all();
        $usuarios = usuario::all();
        return view('agencias.create', compact('usuarios'),compact('suscripciones'));
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
			'Telefono' => 'required|max:10',
			'Descripcion' => 'required|min:10|max:50',
			'Direccion' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        agencia::create($requestData);

        return redirect('agencias')->with('flash_message', 'agencia added!');
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
        $agencia = agencia::findOrFail($id);

        return view('agencias.show', compact('agencia'));
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
        $agencia = agencia::findOrFail($id);
        $usuarios = usuario::all();
        $suscripciones = suscripcione::all();

        return view('agencias.edit', compact('agencia','usuarios','suscripciones'));
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
			'Telefono' => 'required|max:10',
			'Descripcion' => 'required|min:10|max:50',
			'Direccion' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        $agencia = agencia::findOrFail($id);
        $agencia->update($requestData);

        return redirect('agencias')->with('flash_message', 'agencia updated!');
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
        agencia::destroy($id);

        return redirect('agencias')->with('flash_message', 'agencia deleted!');
    }
}
