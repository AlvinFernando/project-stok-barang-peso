<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceBarang extends Model
{
    //
    protected $table = 'invoices_barang';
    // protected $fillable = ['invoices_id', 'jenis_order', 'qty', 'unit', 'harga', 'jumlah'];
    protected $guarded = [];

    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }
}
