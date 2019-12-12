<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\PaqueteAdquirido;
use App\Dispositivo;


class AsignarDispositivoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAsignarDispositivo()
    {
        $dispositivo_id=1;
       	$paquete_adquiridos_id=1;
        
		$response=$this->json('POST','/api/V1/IDispositivoAsignado/Asignar/'.$dispositivo_id.'/'.$paquete_adquiridos_id);
		$response->assertStatus(200);
		$response->assertJson(['r'=>'1']);

		$this->assertTrue(true);
    }
}
