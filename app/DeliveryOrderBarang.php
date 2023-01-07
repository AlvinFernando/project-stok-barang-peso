<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrderBarang extends Model
{
    //
    protected $table = 'delivery_order_barang';
    protected $fillable = ['do_id', 'description', 'qty', 'unit'];

    public function delivery_order() {
        return $this->belongsTo(DeliveryOrder::class);
    }
}
