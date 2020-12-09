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

Route::get("/usuario",      "UserController@usuarios");
Route::get("/usuario/{id}", "UserController@usuarioPorId");

Route::get("/home", "ProductosController@home");
Route::get("/acerca", "ProductosController@acerca");
Route::get("/productos", "ProductosController@productos");

Route::get("/homeFactura", "FacturasController@home");
Route::get("/acercaFactura", "FacturasController@acerca");
Route::get("/facturas", "FacturasController@facturas");

Route::get("/pizzas", "PizzaController@pizzas");
