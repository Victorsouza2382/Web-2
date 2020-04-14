<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//lista 1
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

Route::get('/questao06', 'AtividadesController@revendedora');

Route::post('/questao06', 'AtividadesController@salario');

Route::get('/questao07', 'AtividadesController@Notas');

Route::post('/questao07', 'AtividadesController@MediaP');

Route::get('/questao08', 'AtividadesController@Cilindro');

Route::post('/questao08', 'AtividadesController@Calculo');

Route::get('/questao09', 'AtividadesController@mult');

Route::post('/questao09', 'AtividadesController@nove');

Route::get('/questao10', 'AtividadesController@pecas');

Route::post('/questao10', 'AtividadesController@dez');

Route::get('/questao11', 'AtividadesController@script11');

Route::post('/questao11', 'AtividadesController@resultado');

Route::get('/questao12', 'AtividadesController@doze');

Route::post('/questao12', 'AtividadesController@resultdoze');

Route::get('/questao13', 'AtividadesController@idade');

Route::post('/questao13', 'AtividadesController@idadedias');

Route::get('/questao14', 'AtividadesController@ponderada');

Route::post('/questao14', 'AtividadesController@calcula');
//fim lista 1


//lista2
Route::get('/lista2questao01', 'Atividades02@formulario01');

Route::post('/lista2questao01', 'Atividades02@questao01');

Route::get('/lista2questao02', 'Atividades02@formulario02');

Route::post('/lista2questao02', 'Atividades02@questao02');

Route::get('/lista2questao03', 'Atividades02@formulario03');

Route::post('/lista2questao03', 'Atividades02@questao03');

Route::get('/lista2questao04', 'Atividades02@formulario04');

Route::post('/lista2questao04', 'Atividades02@fuc04');

Route::get('/lista2questao05', 'Atividades02@formulario05');

Route::post('/lista2questao05', 'Atividades02@questao05');
//fim lista 2

//Atividade Crud
// "cursos"
Route::get('/curso', 'CursosController@index');

Route::get('/curso/create', 'CursosController@create');

Route::post('/curso', 'CursosController@store');

//fim cursos
//disciplinas
Route::get('/disciplina', 'DisciplinasController@index');

Route::get('/disciplina/create', 'DisciplinasController@create');

Route::post('/disciplina', 'DisciplinasController@store');

//fim disciplinas
//alunos
Route::get('/aluno', 'AlunosController@index');

Route::get('/aluno/create', 'AlunosController@create');

Route::post('/aluno', 'AlunosController@store');
// fim alunos
//professores
Route::get('/professor', 'ProfessoresController@index');

Route::get('/professor/create', 'ProfessoresController@create');

Route::post('/professor', 'ProfessoresController@store');
//fim professores
//turmas
Route::get('/turma', 'TurmasController@index');

Route::get('/turma/create', 'TurmasController@create');

Route::post('/turma', 'TurmasController@store');
//fim turmas
//





