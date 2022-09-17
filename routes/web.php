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

// Route::get('/post/create', 'PostsController@create');

// Route::get('/', 'PostsController@index');

// Route::post('/posts','PostsController@store');



// ペット登録
Route::get('/pets/pet-register', 'PetsController@create');

Route::get('/', 'PetsController@index');

Route::get('/pets/{pet}', 'PetsController@index');

Route::post('/pets','PetsController@store');

// 詳細投稿
Route::post('/pets_food','FoodController@store_food');

Route::post('/pets_diary','DiaryController@store_diary');

Route::post('/pets_weight','WeightController@store_weight');

// 投稿作成
Route::get('/post', 'PostsController@create');

Route::post('/post/store','PostsController@store');

// 投稿表示
Route::get('/post/index', 'PostsController@index');

// Route::post('/pets_food','Pets_dataController@store_food');
// Route::get('/', 'PostController@index')->middleware('auth');

// Route::get('/', 'PostController@index');