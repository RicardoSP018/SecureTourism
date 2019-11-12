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
<<<<<<< HEAD
=======

Route::group(['middleware'=>'auth:api'],function() {
Route::post('/todos','UsuarioController@todos');
Route::get('/todos/{id}','UsuarioController@consulta');
Route::post('/todos/{id}','UsuarioController@editar');
Route::post('/tareas/nuevo', 'TareaController@guardar');
Route::post('/operaciones/suma/{a}/{b}', 'OperacionesController@sumar');
Route::post('/operaciones/resta/{a}/{b}', 'OperacionesController@restar');
Route::post('/operaciones/multiplica/{a}/{b}', 'OperacionesController@multiplicar');
Route::post('/operaciones/divide/{a}/{b}', 'OperacionesController@dividir');

Route::post('/V1/IAddAgency', 'App\Http\Services\AddAgencyService@Add');
Route::get('/V1/IVerUbicacion/{$id}', 'App\Http\Services\VerUbicacionService@Show');

});
>>>>>>> 1735670f8ab0e2b144224ec6b8e3d4bf95dbde89
