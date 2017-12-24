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

Route::get('/movies/create', ['as' => 'create-muvie', 'uses' => 'MoviesController@create']);

Route::post('/movies/store', ['as' => 'store-muvie', 'uses' => 'MoviesController@store']);

Route::get('/movies/{id}', ['as' => 'single-muvies', 'uses' => 'MoviesController@show']);
