<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    protected $table = 'job_orders';
    protected $fillable = ['kode_barang', 'item_description', 'unit', 'qty', 'status'];
}
