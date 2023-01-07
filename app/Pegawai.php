<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = ['nama', 'jabatan', 'user_id'];

    public function user(){
    	return $this->belongsto(User::class);
    }

    public function delivery_order(){
    	return $this->hasMany(DeliveryOrder::class);
    }

    public function job_orders(){
    	return $this->hasMany(JobOrder::class);
    }

    public function invoices(){
    	return $this->hasMany(DeliveryOrder::class);
    }
}
