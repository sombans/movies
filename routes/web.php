<?php


use App\Http\Controllers\Controller;
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

Route::get('/movies', ['as' => 'all-movies', 'uses' => 'MoviesController@index']);

Route::get('/movies/{id}', ['as' => 'single-muvies', 'uses' => 'MoviesController@show']);

// Route::post('/posts/store', ['as' => 'store-post', 'uses' => 'MoviesController@store']);

// Route::get('/posts/create', ['as' => 'create-post', 'uses' => 'MoviesController@create']);

// Route::post('/posts/{postId}/comments', ['as' => 'comment-post', 'uses' => 'CommentController@store']);