<?php
namespace Tests\Unit;
use Tests\TestCase; 
//use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class AGuiaTest extends TestCase
//"./vendor/bin/phpunit"
{
    /** 
     *
     * @return void
     */ 
    public function testasignar()
    {
        $paquete=1;
       	$guia=1;
		$response=$this->json('POST','/api/V1/IAGuia/asignar/'.$paquete.'/'.$guia);
		$response->assertStatus(200);//Si hay respuesta
        $this->assertDatabaseHas('guia_asignados',['paquete_id'=>'1','guia_id'=>'1']);
        
        

    }
}