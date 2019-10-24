<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IPeriodoPaquete;


class PeriodoPaqueteService 	
	extends Controller
	implements IPeriodoPaquete{

		public function Periodo($periodo){

		$fechaInicio = new DateTime('00-00-0000');
		$intervalo = new DateInterval('P7D');
		$fechaFin = new DateTime('00-00-0000');

		$periodo = new DatePeriod($fechaInicio, $intervalo, $fechaFin);
		foreach ($periodo as $fecha){
			echo $fecha;
			
		}
		}	
	}
