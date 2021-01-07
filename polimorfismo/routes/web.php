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

Route::get("/posts", "PostController@index")->name('posts');
Route::get("/posts/{id}", "PostController@show")->name('post');
Route::post("/posts/comentario", "PostController@agregarComentario")->name("comentariopost");

Route::get("/videos", "VideoController@index")->name("videos");
Route::get("/videos/{id}", "VideoController@show")->name("video");
Route::post("/videos/comentario", "VideoController@agregarComentario")->name("comentario");
