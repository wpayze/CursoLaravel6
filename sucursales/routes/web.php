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

Route::get('/contacto', "contactoController@create");
Route::post('/contacto', "contactoController@store");

Route::get('/sucursal', 'sucursalController@index');
Route::get('/producto/{cantidad}', 'productoController@index');