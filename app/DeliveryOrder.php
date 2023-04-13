<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    //
    protected $table = 'delivery_order';
    protected $fillable = ['no_do', 'tanggal', 'nama', 'pegawais_id', 'customer', 'phone'];
    protected $dates = ['tanggal'];

    public function pegawais(){
        return $this->belongsTo(Pegawai::class);
    }

    public function delivery_order_barang(){
        return $this->hasMany(DeliveryOrderBarang::class);
    }
}
