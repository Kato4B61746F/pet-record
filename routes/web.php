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

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/post/create', 'PostsController@create');

// Route::get('/', 'PostsController@index');

// Route::post('/posts','PostsController@store');



// ペット登録
Route::get('/pet/create', 'PetsController@create');

// Route::get('/pets/{pet}', 'PetsController@index');

Route::post('/pet/store','PetsController@store');

// ペット情報表示
Route::get('/pets/index', 'PetsController@index');

Route::get('/pets/{pet}', 'PetsController@index');

// 詳細情報削除
Route::delete('/pets_food/{food}', 'FoodController@delete');

Route::delete('/pets_diary/{diary}', 'DiaryController@delete');

Route::delete('/pets_weight/{weight}', 'WeightController@delete');

// 詳細投稿
Route::post('/pets_food','FoodController@store_food');

Route::post('/pets_diary','DiaryController@store_diary');

Route::post('/pets_weight','WeightController@store_weight');




// 投稿作成
Route::get('/post', 'PostsController@create');

Route::post('/post/store','PostsController@store');

// 投稿表示
Route::get('/post/index', 'PostsController@index');




//投稿コメント作成　表示
Route::post('/post/store_comment','PostsController@store_comment');

// 投稿詳細表示
Route::get('/post/{post}', 'PostsController@show');
// Route::get('/post/{post}', [PostsController::class ,'show']);

// Route::post('/pets_food','Pets_dataController@store_food');
// Route::get('/', 'PostController@index')->middleware('auth');

// Route::get('/', 'PostController@index');