<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/questao1', 'AtividadesController@formulario1');

Route::post('/questao1', 'AtividadesController@calcular');

Route::get('/questao02', 'AtividadesController@formulario02');

Route::post('/questao02', 'AtividadesController@CalculoVotos');

Route::get('/questao03', 'AtividadesController@InformeS');

Route::post('/questao03', 'AtividadesController@Calculars');

Route::get('/questao04 ','AtividadesController@Fab');

Route::post('/questao04', 'AtividadesController@Custo');

Route::get('/questao05 ','AtividadesController@carro');

Route::post('/questao05', 'AtividadesController@carro1');

Route::get('/questao07', 'AtividadesController@Notas');

Route::post('/questao07', 'AtividadesController@MediaP');
