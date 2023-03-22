<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
//確認ページ
Route::post('/confirm', 'ContactController@confirm')->name('confirm');

//送信完了ページ
Route::post('/thanks', 'ContactController@send')->name('send');
