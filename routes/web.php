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
    return view('welcome');
});

// PascalCase / UpperCamelCase
// lowerCamelCase / camelCase
// snake_case
// kebab-case

Route::get('/profile', 'ProfileController@show');
Route::get('/profiles', 'ProfileController@index');

Route::get('/games/{id}', 'GameController@show')->name('games.show');
Route::get('/games', 'GameController@index');

Route::get('/publishers/{id}', 'PublisherController@show')->name('publishers.show');
Route::get('/publishers', 'PublisherController@index');