<?php

namespace App\Http\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAsignarDispositivo;
use App\PaqueteAdquirido;
use App\Dispositivo;


class DispositivoAsignadoService extends Controller implements IAsignarDispositivo {


	function Asignar($dispositivo_id, $paquete_adquiridos_id){

		
		$asignar = new Asignar();
		$asignar->dispositivo_id = $dispositivo_id;
		$asignar->paquete_adquiridos_id = $paquete_adquiridos_id;
		$asignar->save();
		return array('r'=>$asignar);


	}
}