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

