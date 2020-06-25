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


Auth::routes();

//Route::get('/', function () {
//    return view('site.posts.index');
//});


Route::get('/', 'HomeController@index')->name('/');
Route::get('/{id}', 'HomeController@show'); // Post ID



//Route::resource('/contato', 'Site\ExternalContactController')->only(['index','store']);


//Route::get('/', 'PostsController@listar');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/posts/create', 'PostsController@criar');
//Route::post('/posts/store', 'PostsController@salvar');
//Route::get('/posts/edit/{id}', 'PostsController@editar');
//Route::post('/posts/update/{id}', 'PostsController@atualizar');
//Route::get('/posts/destroy/{id}', 'PostsController@deletar');
