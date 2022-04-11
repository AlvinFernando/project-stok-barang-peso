<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barangs';
    protected $fillable = ['kode_barang', 'item_description', 'unit', 'qty'];

    public function barang_masuks(){
        return $this->hasMany(BarangMasuk::class);
    }
}
