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

Route::prefix('/')->group(function() {

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/new' , 'pagesController@index');

	Route::get('/todo' , 'todosController@index')->name('todos');

	Route::post('/create/todo', 'todosController@store')->name('create.todo');

	Route::get('/todo/update/{id}' , 'todosController@update')->name('update.todo');

	Route::get('/todo/delete/{id}' , 'todosController@delete')->name('delete.todo');

	Route::post('/todo/saveupdate/{id}' , 'todosController@saveupdate')->name('todo.save');

	Route::get('/todo/completed/{id}' , 'todosController@completed')->name('complete.todo');


	Route::get('/auth/{provider}', 'AuthSocialMidea@redirectToProvider');
	Route::get('/auth/{provider}/callback', 'AuthSocialMidea@handleProviderCallback');


	Route::get('/home', 'HomeController@index')->name('home');


});
