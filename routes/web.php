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




Route::get('/', function () {
    return redirect('genre_search');
});
Route::get('genre_search', 'SearchController@genre_search');
Route::get('freeword_search', 'SearchController@freeword_search');
Route::post('results', 'ResultsController@results');
Route::get('results', 'ResultsController@results');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
