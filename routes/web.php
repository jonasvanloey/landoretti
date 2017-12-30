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
    return view('home/index');
});
Route::get('/isearch', function () {
    return view('Search/index');
});
Route::get('/myauctions', function () {
    return view('myauctions/index');
});
Route::get('/art','ArtController@index');
Route::get('/art/add','ArtController@add');
Route::post('/art/store','ArtController@store');
Route::get('/art/watchlist/{id}','ArtController@addToWatchlist');
Route::get('/art/{bid}','ArtController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
