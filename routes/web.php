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
Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('create_post_path')->get('/posts/create', 'PostsController@create');
Route::name('store_post_path')->post('/posts', 'PostsController@store');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');
Route::name('edit_post_path')->get('/posts/{post}/edit', 'PostsController@edit');
Route::name('update_post_path')->put('/posts/{post}', 'PostsController@update');
Route::name('delete_post_path')->delete('/posts/{post}', 'PostsController@delete');
