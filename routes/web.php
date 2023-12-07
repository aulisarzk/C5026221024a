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
    return view('ets');
});

Route::get('corkcicle', function () {
    return view('linktree_corkcicle');
});

Route::get('genapperempuan', function () {
    return view('tugas2');
});

Route::get('jumbotron', function () {
    return view('tugaskelompok');
});

Route::get('cobahello', function () {
    return view('hello');
});

Route::get('cobalink', function () {
    return view('link');
});

Route::get('genapperempuan', function () {
    return view('tugas2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('perkalian', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('/blog2', function(){
    return view('blog');
});

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::get('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function(){
    return view('home');
});

Route::get('/blog/tentang', function(){
    return view('tentang');
});

Route::get('/blog/kontak', function(){
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@lihat');

//keranjang belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');
