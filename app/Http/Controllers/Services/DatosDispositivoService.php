<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IDatosDispositivo;


class DatosDispositivoService extends Controller implements IDatosDispositivo {


	function MostrarDatos($dispositivo_asignados_id){

		
		$find=dispositivo_asignado::where('dispositivo_asignados_id', 'like', '%'. $dispositivo_asignado_id.'%');
		return array('r'=>$waypoints);


	}
}