<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    //
    protected $table = 'barang_keluars';
    protected $fillable = ['barangs_id', 'customer', 'qty', 'tanggal'];
}
