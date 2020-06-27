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
Route::get('/posts/{limit?}','Api\PostsController@getAllPosts');
Route::get('/posts/show/{slug}','Api\PostsController@getPost');

Route::get('/services/{limit?}','Api\ServicesController@getAllServices');
Route::get('/services/show/{id}','Api\ServicesController@getService');

Route::get('/messages/{limit?}','Api\MessagesController@getAllMessages');
Route::get('/message/{id}','Api\MessagesController@getMessage');

Route::get('/sliders/{limit?}','Api\SlidersController@getAllSliders');
// Route::get('/slide/{id}','Api\SlidersController@getSlide');

Route::get('/page/show/{slug}','Api\PageController@getPage');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
