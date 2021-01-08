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

Route::get("/productos", "ProductoController@index")->name("productos");
Route::get("/productos/create", "ProductoController@create")->name("productocreate");
Route::get("/productos/{id}", "ProductoController@show")->name("producto");
Route::post("/productos/store", "ProductoController@store")->name("productostore");
Route::delete("/productos/{id}/delete", "ProductoController@delete")->name("productodelete");
