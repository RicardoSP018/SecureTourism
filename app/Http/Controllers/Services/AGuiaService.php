<?php
	
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAGuia;
use App\GuiaAsignado;
use App\Paquete; 
use App\Guia;

	
class AGuiaService	
	extends Controller
	implements IAGuia{
	
public function asignar($paquete,$guia)
	{	
	
		$paquete=Paquete::where('id',$paquete)->first();
		if($paquete==null)
		throw new \ErrorException("No existe el guia");
	
		$guia=Guia::where('id',$guia)->first();
		if($guia==null)
		throw new \ErrorException("No existe la agencia");
	 
		$x= new GuiaAsignado;
		$x->paquete_id=$paquete->id;
		$x->guia_id=$guia->id;
		$x->save();		
		return array('r'=>$x);
    }
}