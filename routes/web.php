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
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    Route::get('/deliveryorder/{id}/cetakDeliveryOrder','DeliveryOrderController@cetak_delivery_order')->name('cetak_do');
    Route::get('/joborder/{id}/cetakJobOrder','JobOrderController@cetak_job_order')->name('cetak_jo');
    Route::get('/invoice/cetakInvoice','InvoiceController@cetak_invoices')->name('cetak_inv');
});

