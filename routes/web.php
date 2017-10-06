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

Route::get('/', 'ComercialController@planificar');

Route::get('/planificar/campana', 'ComercialController@planificar');
Route::get('/analizar/campana', 'ComercialController@analizar');
Route::get('/analizar/resultados', 'ComercialController@resultados');
Route::get('/resultados/analisis/campanas', 'ComercialController@resultados_analisis');


Route::get('/analizar/siniestro', 'ReclamoController@analizar');
Route::get('/buscar/siniestro', 'ReclamoController@buscar');

Route::get('/consultar/trama', 'ComercialController@empty');
Route::get('/enviar/trama', 'ComercialController@empty');
Route::get('/mantenimiento', 'ComercialController@empty');
Route::get('/perfiles', 'ComercialController@empty');
Route::get('/usuarios', 'ComercialController@empty');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
