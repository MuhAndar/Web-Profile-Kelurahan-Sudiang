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
    return view('login');
});

Auth::routes();


// Back end

Route::group(['middleware' => 'auth'], function (){


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoriesController');

Route::resource('articles', 'ArticlesController');

Route::resource('kontaks', 'KontaksController');

// Home

Route::resource('populasi', 'HomePopulasisController');

Route::resource('tengah', 'HomeTengahController');

// Profil

Route::resource('sambutan', 'SambutanController');

Route::resource('ringkasan', 'RingkasanController');

Route::resource('visimisi', 'VisimisiController');

// Syarat Pengurusan

Route::resource('sekretaris', 'SKSekretarisController');

Route::resource('kebersihan', 'KSKebersihanController');

Route::resource('pemerintahan', 'KSPemerintahanController');

Route::resource('perekonomian', 'KSPerekonomianController');

});