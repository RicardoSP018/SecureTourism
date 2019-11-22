<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Administradore;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
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
            $administradores = Administradore::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('correo', 'LIKE', "%$keyword%")
                ->orWhere('contrasena', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('usuario_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $administradores = Administradore::latest()->paginate($perPage);
        }

        return view('administradores.index', compact('administradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('administradores.create');
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
			'correo' => 'required|min:5',
			'contrasena' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        Administradore::create($requestData);

        return redirect('administradores')->with('flash_message', 'Administradore added!');
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
        $administradore = Administradore::findOrFail($id);

        return view('administradores.show', compact('administradore'));
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
        $administradore = Administradore::findOrFail($id);

        return view('administradores.edit', compact('administradore'));
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
			'correo' => 'required|min:5',
			'contrasena' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        $administradore = Administradore::findOrFail($id);
        $administradore->update($requestData);

        return redirect('administradores')->with('flash_message', 'Administradore updated!');
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
        Administradore::destroy($id);

        return redirect('administradores')->with('flash_message', 'Administradore deleted!');
    }
}
