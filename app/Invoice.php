<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $table = 'invoices';
    protected $fillable = ['no_inv', 'pegawais_id', 'tanggal',
                            'nama', 'customer', 'telp', 'total', 'terbilang'];

    protected $dates = ['tanggal'];

    public function pegawais(){
        return $this->belongsTo(Pegawai::class);
    }

    public function invoice_barang(){
        return $this->hasMany(InvoiceBarang::class);
    }
}

