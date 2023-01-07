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
Route::resource('/admin0', 'AdminController');
Route::resource('/barang', 'BarangController');
Route::resource('/barang_masuk', 'BarangMasukController');
Route::resource('/barang_keluar', 'BarangKeluarController');
Route::resource('/joborder', 'JobOrderController');
Route::resource('/deliveryorder', 'DeliveryOrderController');
Route::resource('/invoice', 'InvoiceController');
Route::get('/printDO','DeliveryOrderController@print_delivery_order')->name('print-delivery-order');
