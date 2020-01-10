<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\paquete;

class AgregarPqueteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $nombre = '';
        $descripcion = '';
        $contenido ='';
        $destino ='';
        $precio = '';
        $imagen = '';
        $categoria_id = '';
        $promocion_id = '';
        $guia_id = '';


        $response = $this->json('api/test/'.$nombre.'/'.$descripcion.'/'.$contenido.'/'.$destino.'/'.$precio.'/'.$imagen.'/'.$categoria_id.'/'.$promocion_id.'/'.$guia_id);
        
        $response->assertStatus(200);
    }
}
