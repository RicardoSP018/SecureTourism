<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PaquetesAdquirido;
use Illuminate\Http\Request;

class PaquetesAdquiridosController extends Controller
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
            $paquetesadquiridos = PaquetesAdquirido::where('fechaInicio', 'LIKE', "%$keyword%")
                ->orWhere('fechaFin', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('turista_id', 'LIKE', "%$keyword%")
                ->orWhere('paquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paquetesadquiridos = PaquetesAdquirido::latest()->paginate($perPage);
        }

        return view('paquetes-adquiridos.index', compact('paquetesadquiridos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paquetes-adquiridos.create');
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
			'precio' => 'required|min:2|max:20'
		]);
        $requestData = $request->all();
        
        PaquetesAdquirido::create($requestData);

        return redirect('paquetes-adquiridos')->with('flash_message', 'PaquetesAdquirido added!');
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
        $paquetesadquirido = PaquetesAdquirido::findOrFail($id);

        return view('paquetes-adquiridos.show', compact('paquetesadquirido'));
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
        $paquetesadquirido = PaquetesAdquirido::findOrFail($id);

        return view('paquetes-adquiridos.edit', compact('paquetesadquirido'));
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
			'precio' => 'required|min:2|max:20'
		]);
        $requestData = $request->all();
        
        $paquetesadquirido = PaquetesAdquirido::findOrFail($id);
        $paquetesadquirido->update($requestData);

        return redirect('paquetes-adquiridos')->with('flash_message', 'PaquetesAdquirido updated!');
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
        PaquetesAdquirido::destroy($id);

        return redirect('paquetes-adquiridos')->with('flash_message', 'PaquetesAdquirido deleted!');
    }
}
