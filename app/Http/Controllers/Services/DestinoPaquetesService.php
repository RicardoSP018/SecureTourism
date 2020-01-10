<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDestinoPaquetes;
use App\Paquete;
use Illuminate\Support\Facades\DB;

class DestinoPaquetesService extends Controller implements IDestinoPaquetes{

	public function adquirir($destino, $costo, $periodo, $contenido)
	
	{
		$paquetes = new Paquete();
		$paquetes->destino = $destino;
		$paquetes->costo = $costo;
		$paquetes->periodo = $periodo;
		$paquetes->contenido = $contenido;
		$paquetes->save();

		return array('paquete'=>'entregado');
	}
		
}
