<?php

namespace App\Contracts;
use App\PaqueteAdquirido;
use App\Dispositivo;


interface IAsignarDispositivo{	
	public function Asignar($dispositivo_id, $paquete_adquiridos_id);
}
