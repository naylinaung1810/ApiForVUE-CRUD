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
    'uses'=>'ApiController@getPosts',

]);

Route::post('/post',[
    'uses'=>'ApiController@newUser'
]);

Route::get('/post/delete/{id}',[
    'uses'=>'ApiController@getRemoveItem'
]);

Route::post('/post/update',[
    'uses'=>'ApiController@updateUser'
]);
