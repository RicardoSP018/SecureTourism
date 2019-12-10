<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Guia;
use Illuminate\Http\Request;

class GuiasController extends Controller
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
            $guias = Guia::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('fechaNac', 'LIKE', "%$keyword%")
                ->orWhere('redesSociales', 'LIKE', "%$keyword%")
                ->orWhere('agencia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $guias = Guia::latest()->paginate($perPage);
        }

        return view('guias.index', compact('guias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('guias.create');
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
			'nombre' => 'required|min:3|max:20'
		]);
        $requestData = $request->all();
        
        Guia::create($requestData);

        return redirect('guias')->with('flash_message', 'Guia added!');
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
        $guia = Guia::findOrFail($id);

        return view('guias.show', compact('guia'));
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
        $guia = Guia::findOrFail($id);

        return view('guias.edit', compact('guia'));
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
			'nombre' => 'required|min:3|max:20'
		]);
        $requestData = $request->all();
        
        $guia = Guia::findOrFail($id);
        $guia->update($requestData);

        return redirect('guias')->with('flash_message', 'Guia updated!');
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
        Guia::destroy($id);

        return redirect('guias')->with('flash_message', 'Guia deleted!');
    }
}
