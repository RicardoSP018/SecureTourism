<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VerDatosTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $dispositivo_asignado = 1;
    	$response=$this->
        json('GET',
        '/api/V1/IDatosDispositivo/MostrarDatos/'.$dispositivo_asignado);
        $response->assertStatus(200);
        $response->assertJson(['r'=>'1']);
    	
        $this->assertTrue(true);
    }
}
