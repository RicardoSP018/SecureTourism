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
		throw new \ErrorException("No existe el paquete");
	
		$guia=Guia::where('id',$guia)->first();
		if($guia==null)
		throw new \ErrorException("No existe el guia");
	 
		$p= new GuiaAsignado;
		$p->paquete_id=$paquete->id;
		$p->guia_id=$guia->id; 
		$p->save();		
		return array('r'=>$p);
    }
}