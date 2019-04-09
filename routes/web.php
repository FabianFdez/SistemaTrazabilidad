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

Route::resource('fincas','FincaController');
Route::get('/fincas/delete/{id}', 'FincaController@deleteFinca');

// FRUTAS
Route::resource('/frutas','FrutaController');
Route::POST('/updatefrutas','FrutaController@update');
Route::get('/frutas/delete/{id}', 'FrutaController@deleteFruta');

// USUARIOS 
Route::resource('usuarios','UsuarioController');
Route::get('/usuarios/delete/{id}', 'UsuarioController@deleteUsuario');

//SECCIONES
Route::resource('secciones','SeccionController',['middleware' => 'auth']);

Route::get('/seccionesLaCueva', 'SeccionController@seccionesLaCueva',['middleware' => 'auth']);
Route::get('/seccionesFiladelfia', 'SeccionController@seccionesFiladelfia',['middleware' => 'auth']);
Route::get('/seccionesMaruca', 'SeccionController@seccionesMaruca',['middleware' => 'auth']);
Route::get('/volver', 'SeccionController@volver',['middleware' => 'auth']);

Route::get('/secciones/delete/{numSeccion}/{numFinca}', 'SeccionController@deleteSeccion',['middleware' => 'auth']);
Route::get('/secciones/{numSeccion}/{numFinca}', 'SeccionController@show',['middleware' => 'auth']);
Route::POST('/secciones/update/{numSeccion}/{numFinca}', 'SeccionController@update',['middleware' => 'auth']);

//REPORTES
Route::get('/reportes','ReporteController@index',['middleware' => 'auth']);
Route::get('/LaCueva','ReporteController@mapaLaCueva',['middleware' => 'auth']);
Route::get('/Filadelfia','ReporteController@mapaFiladelfia',['middleware' => 'auth']);
Route::get('/Maruca','ReporteController@mapaMaruca',['middleware' => 'auth']);
Route::get('/moduloReporte/{id}', 'ReporteController@modulo');
Route::get('/principalReportes', 'ReporteController@menuResportes');
Route::get('/preparacion', 'ReporteController@preparacion');
Route::get('/siembra', 'ReporteController@siembra');
Route::get('/desCultivoVege', 'ReporteController@desCultivoVege');
Route::get('/desCultivoRepro', 'ReporteController@desCultivoRepro');
Route::get('/cosecha', 'ReporteController@cosecha');
Route::get('/manejoPosCosecha', 'ReporteController@manejoPosCosecha');
Route::get('/infoMapas', 'ReporteController@infoMapas');
Route::POST('/savePreparacion', 'ReporteController@guardarPreparacion');
Route::POST('/saveSiembra', 'ReporteController@guardarSiembra');
Route::POST('/desarrolloCultivoVegetativo', 'ReporteController@guardarDesCultivoVege');
Route::POST('/desCultivoReproductivo', 'ReporteController@guardarDesCultivoRepro');
Route::POST('/cosecha', 'ReporteController@guardarCosecha');
Route::POST('/manejoposcosecha', 'ReporteController@guardarManejoPosCosecha');




Route::get('/preparacion',function(){
    return view('reportes.preparacion');
});

Route::get('/siembra',function(){
    return view('reportes.siembra');
});


Route::get('/desCultivoVege',function(){
    return view('reportes.desCultivoVege');
});

Route::get('/cosecha',function(){
    return view('reportes.cosecha');
});

Route::get('/manejoPosCosecha',function(){
    return view('reportes.manejoPosCosecha');
});


Route::get('/desCultivoRepro',function(){
    return view('reportes.desCultivoRepro');
});
