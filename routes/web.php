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
Route::get('/administrador', function () {
    return view('layouts/administrador');
});
Route::get('/veterinario', function () {
    return view('layouts/veterinaria');
});
Route::get('/secretaria', function () {
    return view('layouts/secretaria');
});
