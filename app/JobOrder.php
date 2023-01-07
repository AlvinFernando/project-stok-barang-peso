<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    protected $table = 'job_orders';
    protected $fillable = ['tanggal',
                            'customer',
                            'jenis_order',
                            'size',
                            'pages',
                            'color',
                            'qty',
                            'pegawais_id',
                            'deadline',
                            'finishing',
                            'materials'
                        ];

    public function pegawais(){
        return $this->belongsTo(Pegawai::class);
    }
}
