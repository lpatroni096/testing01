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
    return view('welcome');
});

Route::get('/planificar/campana', 'ComercialController@planificar');
Route::get('/analizar/campana', 'ComercialController@analizar');
Route::get('/analizar/resultados', 'ComercialController@resultados');
Route::get('/resultados/analisis/campanas', 'ComercialController@resultados_analisis');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
