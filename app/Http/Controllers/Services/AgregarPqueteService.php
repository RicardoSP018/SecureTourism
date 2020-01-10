<?
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAgregarPaquete;
use App\Paquete;

class AgregarPqueteService extends Controller
	implements IAgregarPaquete{

		public function Agregar($nombre, $descripcion, $contenido,$destino,$precio, $imagen, $categoria_id, $promocion_id, $guia_id);
		{
			$nuevo = New Paquete();
			$nuevo->Nombre = $nombre;
			$nuevo->descripcion = $descripcion;
			$nuevo->contenido = $contenido;
			$nuevo->destino= $destino;
			$nuevo->precio= $precio;
			$nuevo->image= $image;
			$nuevo->categoria_id= $categoria_id;
			$nuevo->promocion_id= $promocion_id;
			$nuevo->guia_id= $guia_id;
			$nuevo->save();

			return array('Agregar'=>'terminado');
		}

		
	}

