<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    //
    protected $table = 'barang_masuks';
    protected $fillable = ['barangs_id', 'supplier', 'qty', 'tanggal'];

    public function barangs(){
        return $this->belongsTo(Barang::class);
    }
}
