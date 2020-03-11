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

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/curso', 'CursoController@index');

Route::get('/ex1', 'Dever1Controller@ex1');

Route::post('/ex1', 'Dever1Controller@calcular');

Route::get('/formulario2', 'Dever1Controller@formulario2');

Route::post('/formulario2', 'Dever1Controller@resultado2');


