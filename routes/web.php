<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\CommentContoller;
use App\Http\Controllers\MoviesController;


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

Route::get('/add', ['as' => 'create-muvie', 'uses' => 'MoviesController@create']);

Route::post('/movies/store', ['as' => 'store-muvie', 'uses' => 'MoviesController@store']);

Route::get('/movies/{id}', ['as' => 'single-muvies', 'uses' => 'MoviesController@show']);

Route::post('/movies/{movieId}/comments', ['as' => 'comment-movie', 'uses' => 'CommentController@store']);

Route::get('/genres/{genre}', 'GenresController@show');
