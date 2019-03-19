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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rrr', array(
	'as' => 'rrr',
	'middleware' => 'auth',
	'uses'=>'HomeController@index'
));
 
// FINCAS

Route::resource('fincas','FincaController',['middleware' => 'auth']);
Route::get('/fincas/delete/{id}', 'FincaController@deleteFinca');

// FRUTAS
Route::resource('frutas','FrutaController');
Route::get('/frutas/delete/{id}', 'FrutaController@deleteFruta',['middleware' => 'auth']);

// USUARIOS 
Route::resource('usuarios','UsuarioController');
Route::get('/usuarios/delete/{id}', 'UsuarioController@deleteUsuario',['middleware' => 'auth']);

//SECCIONES
Route::resource('secciones','SeccionController',['middleware' => 'auth']);
Route::get('/secciones/delete/{numSeccion}/{numFinca}', 'SeccionController@deleteSeccion',['middleware' => 'auth']);
Route::get('/secciones/{numSeccion}/{numFinca}', 'SeccionController@show',['middleware' => 'auth']);
Route::POST('/secciones/update/{numSeccion}/{numFinca}', 'SeccionController@update',['middleware' => 'auth']);

//REPORTES
Route::get('/reportes',function(){
    return view('reportes.selecFinca');
});

Route::get('/chequeo',function(){
    return view('reportes.principalChequeo');
});

Route::get('/modulo',function(){
    return view('reportes.moduloReportes');
});

