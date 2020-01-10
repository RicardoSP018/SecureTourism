<?php
namespace App\Contracts;
interface IAgregarPaquete
{
	function Agregar($nombre, $descripcion, $contenido, $destino,$precio, $imagen, $categoria_id, $promocion_id, $guia_id);

}

?>