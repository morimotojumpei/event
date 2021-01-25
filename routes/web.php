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

Auth::routes();

Route::get('/home', 'TopPageController@home')->name('home.index');
// Route::get('/schedule', 'TopPageController@schedule')->name('schedule.index');
Route::get('/info', 'TopPageController@info')->name('info.index');
Route::get('/first_time', 'TopPageController@first_time')->name('first_time.index');
Route::get('/question', 'TopPageController@question')->name('question.index');

// カレンダー
Route::get('/schedule', 'CalendarController@show')->name('schedule.index');

//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');

//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');
