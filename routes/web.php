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

// Front End

Route::get('/', 'PageController@index', 'PageController')->name('index');
Route::get('/profil/sambutan', 'PageController@sambutan')->name('sambutan');
Route::get('/profil/ringkasan', 'PageController@ringkasan')->name('ringkasan');
Route::get('/profil/visimisi', 'PageController@vmts')->name('visimisi');
Route::get('/staff1', 'PageController@staff1')->name('staff1');
Route::get('/syaratkepengurusan/sekretaris', 'PageController@sekretaris')->name('sekretaris');
Route::get('/syaratkepengurusan/kebersihan', 'PageController@sKebersihan')->name('kebersihan');
Route::get('/syaratkepengurusan/pemerintahan', 'PageController@sPemerintahan')->name('pemerintahan');
Route::get('/syaratkepengurusan/perekonomian', 'PageController@sPerekonomian')->name('perekonomian');
Route::get('/kontak', 'FrontKontakController@kontak')->name('kontak');
Route::get('/pkk', 'PageController@pkk')->name('pkk');
Route::get('/lurah', 'PageController@lurah')->name('lurah');
Route::get('/kepengurusanberkas', 'PageController@kepengurusanberkas')->name('berkas');


// Back end

Route::get('/Admin', function () {
    return view('login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function (){


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoriesController');

Route::resource('articles', 'ArticlesController');

// Home

Route::resource('populasi', 'HomePopulasisController');

Route::resource('tengah', 'HomeTengahController');

Route::resource('artikel', 'ArticleController');

Route::resource('slogan', 'HomeSloganController');

Route::resource('about', 'HomeAboutController');

// Profil

Route::resource('sambutan', 'SambutanController');

Route::resource('ringkasan', 'RingkasanController');

Route::resource('visimisi', 'VisimisiController');

// Staf

Route::resource('staff', 'StaffController');

// Syarat Pengurusan

Route::resource('sekretaris', 'Syarat_Pengurusan\SKSekretarisController');

Route::resource('kebersihan', 'Syarat_Pengurusan\KSKebersihanController');

Route::resource('pemerintahan', 'Syarat_Pengurusan\KSPemerintahanController');

Route::resource('perekonomian', 'Syarat_Pengurusan\KSPerekonomianController');

// Kontak


Route::resource('kontaks', 'KontaksController');

});