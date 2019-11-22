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
Route::group(['middleware' => 'readwrite'], function () {

Route::get('/usuario/form', 'UsuariosController@form')
	->name("usuario.formulario");
	
Route::post('/usuario/nuevo', 'UsuariosController@guardar')
	->name("usuario.guardar");
;
	
});
	
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
Route::resource('administradores', 'AdministradoresController');
Route::resource('turistas', 'TuristasController');
Route::resource('paquetes', 'PaquetesController');
Route::resource('paquetes-adquiridos', 'PaquetesAdquiridosController');
Route::resource('dispositivos', 'DispositivosController');
Route::resource('dispositivos-asignados', 'DispositivosAsignadosController');
Route::resource('waypoints', 'WaypointsController');
Route::resource('destinos', 'DestinosController');
Route::resource('guias', 'GuiasController');
Route::resource('guias-asignados', 'GuiasAsignadosController');
Route::resource('agencias', 'AgenciasController');
Route::resource('categorias', 'CategoriasController');
Route::resource('suscripciones', 'SuscripcionesController');
Route::resource('servicios', 'ServiciosController');
Route::resource('promociones', 'PromocionesController');
Route::resource('promociones-asignadas', 'PromocionesAsignadasController');