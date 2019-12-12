<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	
Route::get('/b', function () {
    return view('Login');
});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
	Route::get('/', 'UsuariosController@mostrar')
	->name("home");
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::resource('usuarios', 'UsuariosController');
Route::resource('administradors', 'AdministradorsController');
Route::resource('turistas', 'TuristasController');
Route::resource('paquetes', 'PaquetesController');
Route::resource('paquete-adquiridos', 'PaqueteAdquiridosController');
Route::resource('dispositivos', 'DispositivosController');
Route::resource('dispositivo-asignados', 'DispositivoAsignadosController');
Route::resource('waypoints', 'WaypointsController');
Route::resource('destinos', 'DestinosController');
Route::resource('agencias', 'AgenciasController');
Route::resource('guias', 'GuiasController');
Route::resource('guia-asignados', 'GuiaAsignadosController');
Route::resource('categorias', 'CategoriasController');
Route::resource('suscripcions', 'SuscripcionsController');
Route::resource('servicios', 'ServiciosController');
Route::resource('promocions', 'PromocionsController');
Route::resource('promocion-asignadas', 'PromocionAsignadasController');