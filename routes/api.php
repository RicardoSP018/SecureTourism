<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});

Route::post('/V1/IDispositivoAsignado/Asignar/{dispositivo_id}/{paquete_adquiridos_id}/', 'Services/DispositivoAsignadoService@Asignar');	
Route::get('/V1/IDatosDispositivo/MostrarDatos/{dispositivo_asignado}', 'Services/DatosDispositivoService@MostrarDatos');
Route::post('V1/IAGuia/asignar/{paquete}/{guia}', 'Services\AGuiaService@asignar');
Route::get('/periodopaquete/{fechaInicio}/{fechaFin}/{intervalo}', 'Services\PeriodoPaqueteService@periodo');