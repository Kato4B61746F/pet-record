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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', function() {
//     return view('pets/index');
// });

Route::get('/pet-register', function() {
    return view('pets/pet-register');
});


Route::get('/post/create', function() {
    return view('post/create');
});
Route::post('/post/create', 'PostsController@create');


Route::get('/', 'PostsController@index');

// Route::get('/', 'PostController@index')->middleware('auth');

// Route::get('/', 'PostController@index');