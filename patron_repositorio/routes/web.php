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

Route::get("/customers", "CustomerController@index");
Route::get("/customers/{id}", "CustomerController@show");
Route::get("/customers/{id}/update", "CustomerController@update");
Route::get("/customers/{id}/delete", "CustomerController@delete");
Route::get("/customers/{id}/activarodesactivar", "CustomerController@toggleActive");
