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

Route::get('/', 'HomeController@index')->name('/');
Route::get('/{id}', 'HomeController@show'); // Post ID
Route::post('/search', 'HomeController@search')->name('search');


Route::middleware(['auth'])->group(function () {

    Route::resource('/adm/profile', 'Api\Profile\ProfileController');
    Route::resource('/adm/posts', 'Api\Adm\PostController');
    Route::resource('/adm/tags', 'Api\Adm\TagController');
    Route::post('/adm/posts/search/', 'Api\Adm\PostController@search')->name('adm.search');
});
