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

// 一覧ページ

Route::get('/', 'AccountBookController@index')->name('list');

// 投稿ページ
Route::get('/create', 'AccountBookController@create')->name('create');

// 登録メソッド
Route::post('/store', 'AccountBookController@store')->name('store');

// 削除メソッド
Route::delete('/delete/{id}', 'AccountBookController@delete')->name('delete');