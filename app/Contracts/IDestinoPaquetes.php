<?php

namespace App\Contracts;

interface IDestinoPaquetes{	
	public function adquirir($destino, $costo, $periodo, $contenido);
}
