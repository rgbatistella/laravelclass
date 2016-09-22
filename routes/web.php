<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', ['as'=>'posts.index', 'uses'=>'PostsController@index']);
Route::get('/create', ['as'=>'posts.create', 'uses'=>'PostsController@create']);
Route::post('/store', ['as'=>'posts.store', 'uses'=>'PostsController@store']);
Route::get('/edit/{post_id}', ['as'=>'posts.edit', 'uses'=>'PostsController@edit']);
Route::patch('/update/{post_id}', ['as'=>'posts.update', 'uses'=>'PostsController@update']);
