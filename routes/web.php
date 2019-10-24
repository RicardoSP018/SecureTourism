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
Route::resource('suscripciones', 'suscripcionesController');
Route::resource('agencias', 'agenciasController');
Route::resource('proveedores', 'proveedoresController');
Route::resource('productos', 'productosController');
Route::resource('categorias', 'CategoriasController');
Route::resource('promociones', 'PromocionesController');
Route::resource('guias', 'GuiasController');
Route::resource('paquetes', 'PaquetesController');