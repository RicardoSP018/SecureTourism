<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Agencia;
use Illuminate\Http\Request;

class AgenciasController extends Controller
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
            $agencias = Agencia::where('nombreAgencia', 'LIKE', "%$keyword%")
                ->orWhere('nombreDueno', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('redesSociales', 'LIKE', "%$keyword%")
                ->orWhere('administrador_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $agencias = Agencia::latest()->paginate($perPage);
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
        return view('agencias.create');
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
			'telefono' => 'required|max:10',
			'descripcion' => 'required|min:5|max:50',
			'direccion' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        Agencia::create($requestData);

        return redirect('agencias')->with('flash_message', 'Agencia added!');
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
        $agencia = Agencia::findOrFail($id);

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
        $agencia = Agencia::findOrFail($id);

        return view('agencias.edit', compact('agencia'));
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
			'telefono' => 'required|max:10',
			'descripcion' => 'required|min:5|max:50',
			'direccion' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        $agencia = Agencia::findOrFail($id);
        $agencia->update($requestData);

        return redirect('agencias')->with('flash_message', 'Agencia updated!');
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
        Agencia::destroy($id);

        return redirect('agencias')->with('flash_message', 'Agencia deleted!');
    }
}
