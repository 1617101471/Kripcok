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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
	Route::resource('/produk','ProduksController');
	Route::resource('/galeri','GaleriController');
	Route::resource('/user','UsersController');
	Route::resource('/artikel','ArtikelController');
	Route::resource('/testimoni','TestimoniController');
	Route::resource('/kontak', 'KontakController');
});

Route::get('/produk','FrontendController@produk')->name('produk');
Route::get('/galeri','FrontendController@galeri')->name('galeri');
Route::get('/beranda','FrontendController@beranda')->name('beranda');
Route::get('/artikel','FrontendController@artikel')->name('artikel');
Route::get('/testimoni','FrontendController@testimoni')->name('testimoni');
