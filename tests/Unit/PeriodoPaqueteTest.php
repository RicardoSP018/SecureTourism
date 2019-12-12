<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeriodoPaqueteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function PeriodoPaqueteTest()

    {
         $fechaInicio='2019-08-17';
         $intervalo='P7D';
        $fechaFinal='2019-08-25';
        
        $response=$this->
        json('GET',
        '/api/periodopaquete/'.$fechaInicio.'/'.$fechaFinal);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>20]);
        
        $this->assertTrue(true);

    }
}
