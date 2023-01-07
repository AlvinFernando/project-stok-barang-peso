<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admins';
    protected $fillable = ['nama', 'jabatan'];

    public function user(){
    	return $this->belongsto(User::class);
    }
}
