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

Route::redirect('/', '/login');

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/pegawai', 'PegawaiController');
Route::resource('/barang', 'BarangController');
Route::get('/barang_masuk', 'BarangController@barang_masuk');
Route::get('/barang_keluar', 'BarangController@barang_keluar');
Route::resource('/joborder', 'JobOrderController');
