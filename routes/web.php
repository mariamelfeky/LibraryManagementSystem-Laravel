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
<<<<<<< HEAD
Route::resource('user', 'UserController');


// hajar






// Route::view('/','welcome');
// Route::view('managerHome','managerHome');
Route::get('managerHome', function () {
    return view('managers.managerHome');
});
// Route::view('managerList','managerList');
Route::get('managerList', function () {
    return view('managers.managerList');
});

Route::get('managers', 'managerController@index');
// Route::view('userList','userList');
Route::get('userList', function () {
    return view('managers.userList');
});
// Route::view('managerProfile','managerProfile');
Route::get('managerProfile', function () {
    return view('managers.managerProfile');
});
=======
Route::get('/sort/{sort_value}', 'HomeController@sort');
Route::post('/search', 'HomeController@search');
Route::resource('user', 'UserController');
>>>>>>> a7d31c223634c6349145cc7390efe0a9ceed6a6f
