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
Route::get('/posts', 'PostsController@listar');
Route::get('/posts/create', 'PostsController@criar');
Route::post('/posts/store', 'PostsController@salvar');
Route::get('/posts/edit/{id}', 'PostsController@editar');
Route::post('/posts/update/{id}', 'PostsController@atualizar');
Route::get('/posts/destroy/{id}', 'PostsController@deletar');
