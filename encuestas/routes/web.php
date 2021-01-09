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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cuestionarios/create', "CuestionarioController@create")->name("cuestionarios.create");
Route::get('cuestionarios/{cuestionario}', "CuestionarioController@show")->name("cuestionarios.show");
Route::post('/cuestionarios', "CuestionarioController@store")->name("cuestionarios.store");

Route::get('cuestionarios/{cuestionario}/preguntas/create', "PreguntaController@create")->name("cuestionarios.pregunta.create");
Route::post('cuestionarios/{cuestionario}/preguntas', "PreguntaController@store")->name("cuestionarios.pregunta.store");

Route::get("/encuestas/{cuestionario}-{slug}", "EncuestaController@show");
Route::post("/encuestas/{cuestionario}-{slug}", "EncuestaController@store");
