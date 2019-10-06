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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','kategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/artikel','artikelcontroller@index')->name('artikel.index');
Route::get('/galeri','galericontroller@index')->name('galeri.index');
Route::get('/berita','beritaController@index')->name('berita.index');
Route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/pengumuman','pengumumanController@index')->name('pengumuman.index');

Route::get('/artikel/create','artikelcontroller@create')->name('artikel.create');
Route::post('/artikel/create','artikelcontroller@store')->name('artikel.store');
Route::get('/artikel/{artikel}','artikelcontroller@show')->name('artikel.show');

Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('Kategori_artikel.create');
Route::post('/kategori_artikel/create','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{kategori_artikel}','KategoriArtikelcontroller@show')->name('kategori_artikel.show');

Route::get('/berita/create','beritaController@create')->name('berita.create');
Route::post('/berita/create','beritaController@store')->name('berita.store');
Route::get('/berita/{berita}','beritaController@show')->name('berita.show');

Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita/create','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{kategori_berita}','KategoriBeritacontroller@show')->name('kategori_berita.show');

Route::get('/galeri/create','galeriController@create')->name('galeri.create');
Route::post('/galeri/create','galeriController@store')->name('galeri.store');
Route::get('/galeri/{galeri}','galeriController@show')->name('galeri.show');

Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri/create','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{kategori_galeri}','KategoriGaleriController@show')->name('kategori_galeri.show');


Route::get('/pengumuman/create','pengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman/create','pengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{pengumuman}','pengumumanController@show')->name('pengumuman.show');

Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman/create','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{kategori_pengumuman}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');






Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
