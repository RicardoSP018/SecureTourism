<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PaqueteAdquirido;
use Illuminate\Http\Request;

class PaqueteAdquiridosController extends Controller
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
            $paqueteadquiridos = PaqueteAdquirido::where('fechaInicio', 'LIKE', "%$keyword%")
                ->orWhere('fechaFin', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('turista_id', 'LIKE', "%$keyword%")
                ->orWhere('paquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $paqueteadquiridos = PaqueteAdquirido::latest()->paginate($perPage);
        }

        return view('paquete-adquiridos.index', compact('paqueteadquiridos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paquete-adquiridos.create');
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
        
        PaqueteAdquirido::create($requestData);

        return redirect('paquete-adquiridos')->with('flash_message', 'PaqueteAdquirido added!');
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
        $paqueteadquirido = PaqueteAdquirido::findOrFail($id);

        return view('paquete-adquiridos.show', compact('paqueteadquirido'));
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
        $paqueteadquirido = PaqueteAdquirido::findOrFail($id);

        return view('paquete-adquiridos.edit', compact('paqueteadquirido'));
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
        
        $paqueteadquirido = PaqueteAdquirido::findOrFail($id);
        $paqueteadquirido->update($requestData);

        return redirect('paquete-adquiridos')->with('flash_message', 'PaqueteAdquirido updated!');
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
        PaqueteAdquirido::destroy($id);

        return redirect('paquete-adquiridos')->with('flash_message', 'PaqueteAdquirido deleted!');
    }
}
