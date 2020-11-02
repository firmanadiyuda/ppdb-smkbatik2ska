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
    return view('beranda');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/admin', function () {
    return redirect('/dashboard');
});

Route::post('/proses', 'ProsesDataController@proses');

Route::get('/cekstatus', 'ProsesDataController@cekstatus');
Route::get('/status/{kode}', 'ProsesDataController@status');

Route::post('/updatestatus', 'ProsesDataController@updatestatus')->middleware(['auth']);
Route::get('/cetakexcel', 'ProsesDataController@cetakexcel')->middleware(['auth']);

Route::get('/cari', 'ProsesDataController@cari');

Route::get('/cetak/{kode}', 'ProsesDataController@cetak');
Route::get('/suratpengumuman/{kode}', 'ProsesDataController@suratpengumuman');

Route::post('/uploadbuktipembayaran', 'ProsesDataController@uploadbuktipembayaran');

Auth::routes(['register' => false]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Route::get('migrate', function () {

//     \Artisan::call('migrate:refresh --seed');

//     dd("Database migrated");

// });