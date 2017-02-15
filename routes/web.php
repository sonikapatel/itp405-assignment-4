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

// Route::get('/', function () {
//     return redirect('/songs');
// });

Route::get('/', 'TweetController@index');
Route::post('/', 'TweetController@store');
Route::get('/tweets/{id}', 'TweetController@viewID');
Route::get('/tweets/{id}/delete', 'TweetController@destroy');
