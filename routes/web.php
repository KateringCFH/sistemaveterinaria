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
    return view('auth/login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/administrador', function () {
//     return view('layouts/administrador');
// });
Route::get('/veterinario', function () {
    return view('layouts/veterinario');
});
Route::get('/secretaria', function () {
    return view('layouts/secretaria');
});
Route::resource('/administrador', 'PersonalController');
Route::resource('/personal', 'PersonalController');
Route::resource('/propietario', 'PropietarioController');
Route::resource('/mascota', 'MascotaController');
Route::resource('/historial', 'HistorialController');
Route::get('/citas','HistorialController@citas');
Route::get('/citas/pdf', 'HistorialController@fun_pdf');
Route::get('/citas/reporte', function () {
    return view('historial/reporte_cita');
});
Route::get('/rhistorial',function (){
  return view('historial/reporte_historial/r_historial');
});
Route::get('/getPDF','PDFController@getPDF');


Route::get('/imprimir', 'GeneradorController@imprimir');
