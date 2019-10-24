<?php

namespace App\Contracts;

interface IAdquirirPaquete{	
	public function Adquirir($destino, $costo, $periodo);
}
