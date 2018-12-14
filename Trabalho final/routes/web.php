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

Route::get('storeAluno', function () {
    return view('storeAluno');
});
Route::post('storeAlunoPost', 'AlunoController@store');
Route::get('pesquisa', function () {
    return view('pesquisaAluno');
});


Route::get('storeAno', function () {
    return view('storeAno');
});
Route::post('storeAnoPost', 'AnoController@store');
Route::get('pesquisaAluno','AlunoController@pesquisaAluno');
Route::get('pesquisaTurma','AlunoController@pesquisaTurma');

Route::get('pesquisa','AlunoController@pesquisa');



Route::get('storeTurma', function () {
    return view('storeTurma');
});


Route::post('storeTurmaPost', 'TurmaController@store');


Route::get('indexAlunoGet', 'AlunoController@index');

Route::get('decfreq/{codigo}','AlunoController@decfreq');
Route::get('dectrans/{codigo}','AlunoController@dectrans');
Route::get('decconc/{codigo}','AlunoController@decconc');
Route::resource('/anos', 'AnoController');
Route::resource('/turma', 'TurmaController');
Route::resource('/aluno', 'AlunoController');
Route::get('/cadastrarAluno', 'AlunoController@createAluno');
Route::get('/cadastrarTurma', 'TurmaController@createTurma');
Route::get('/cadastrarAno', 'AnoController@createAno');
Route::get('indexAnoGet', 'AnoController@index');


Route::get('indexTurmaGet', 'TurmaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
