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

Route::get('/', 'WelcomeController@index');
Route::get('/search', 'WelcomeController@search')->name('search');
  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin-page', 'PostController',['except'=>['show']]);
Route::get('/admin-page/{slug}', 'PostController@show')->name('show');
//Route::get('/threads/{thread}/{slug}', 'ThreadController@show')->name('threads.show');

Route::resource('admin-category', 'CategoryController');


