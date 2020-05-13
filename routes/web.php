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

Route::resource('book', 'BooksController');
Route::resource('category', 'CategoriesController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sort/{sort_value}', 'HomeController@sort');
Route::post('/search', 'HomeController@search');
Route::resource('user', 'UserController');
