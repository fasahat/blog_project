<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts',[
    'uses' => 'Post\PostController@index',
    'as' => 'posts'
]);

Route::post('/posts',[
    'uses' => 'Post\PostController@store',
    'as' => 'store_posts'
]);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
