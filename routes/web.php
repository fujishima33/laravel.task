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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

Route::group(['prefix' => 'admin'], function() {
    //課題21(PHP/Laravel 12) 2番　ログインしていない状態でアクセスした場合ログイン画面にリダイレクト
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    //課題21(PHP/Laravel 12) 3番　同上
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 
//    AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください
Route::get('XXX', 'Admin\AAAController@bbb');