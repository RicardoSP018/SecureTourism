<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Destino;
use Illuminate\Http\Request;

class DestinosController extends Controller
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
            $destinos = Destino::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('cupoMax', 'LIKE', "%$keyword%")
                ->orWhere('paquete_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $destinos = Destino::latest()->paginate($perPage);
        }

        return view('destinos.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('destinos.create');
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
			'cupoMax' => 'required|max:2'
		]);
        $requestData = $request->all();
        
        Destino::create($requestData);

        return redirect('destinos')->with('flash_message', 'Destino added!');
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
        $destino = Destino::findOrFail($id);

        return view('destinos.show', compact('destino'));
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
        $destino = Destino::findOrFail($id);

        return view('destinos.edit', compact('destino'));
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
			'cupoMax' => 'required|max:2'
		]);
        $requestData = $request->all();
        
        $destino = Destino::findOrFail($id);
        $destino->update($requestData);

        return redirect('destinos')->with('flash_message', 'Destino updated!');
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
        Destino::destroy($id);

        return redirect('destinos')->with('flash_message', 'Destino deleted!');
    }
}
