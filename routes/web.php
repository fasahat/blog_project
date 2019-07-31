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

Route::get('/', [
    'uses' => 'Home\HomeController@index',
    'as' => 'homePage'
]);

Route::get('/posts',[
    'uses' => 'Post\PostController@index',
    'as' => 'posts'
]);

Route::get('/cpanel',[
    'middleware' => 'auth',
    'uses' => 'CPanel\CPanelController@index',
    'as' => 'cpanel'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
