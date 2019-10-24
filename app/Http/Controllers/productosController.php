<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\proveedore;
use App\producto;
use Illuminate\Http\Request;

class productosController extends Controller
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
            $productos = producto::where('Modelo', 'LIKE', "%$keyword%")
                ->orWhere('Cantidad', 'LIKE', "%$keyword%")
                ->orWhere('Descripcion', 'LIKE', "%$keyword%")
                ->orWhere('Precio', 'LIKE', "%$keyword%")
                ->orWhere('Imagen', 'LIKE', "%$keyword%")
                ->orWhere('proveedor_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $productos = producto::latest()->paginate($perPage);
        }

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $proveedores = proveedore::all();
        return view('productos.create', compact('proveedores'));
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
			'Descripcion' => 'required|min:8'
		]);
        $requestData = $request->all();
                if ($request->hasFile('Imagen')) {
            $requestData['Imagen'] = $request->file('Imagen')
                ->store('uploads', 'public');
        }

        producto::create($requestData);

        return redirect('productos')->with('flash_message', 'producto added!');
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
        $producto = producto::findOrFail($id);

        return view('productos.show', compact('producto'));
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

        $proveedores = proveedore::all();
        $producto = producto::findOrFail($id);

        return view('productos.edit', compact('producto','proveedores'));
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
			'Descripcion' => 'required|min:8'
		]);
        $requestData = $request->all();
                if ($request->hasFile('Imagen')) {
            $requestData['Imagen'] = $request->file('Imagen')
                ->store('uploads', 'public');
        }

        $producto = producto::findOrFail($id);
        $producto->update($requestData);

        return redirect('productos')->with('flash_message', 'producto updated!');
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
        producto::destroy($id);

        return redirect('productos')->with('flash_message', 'producto deleted!');
    }
}
