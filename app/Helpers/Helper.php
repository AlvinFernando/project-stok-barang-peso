<?php

namespace App\Helpers;
use App\Invoices;

class Helper{

    public static function IDGenerator($model, $trow, $length = 3, $prefix){
        $data = $model::orderBy('id', 'desc')->first();

        if(!$data){
            $dlength = $length;
            $last_num = '';
        }else{
            $codes = substr($data->$trow, strlen($prefix)+1);
            $d_last_num = ($codes/1)*1;
            $increment_last_num = $d_last_num+1;
            $last_num_length = strlen($increment_last_num);
            $dlength = $length - $last_num_length;
            $last_num_length = $increment_last_num;
        }

        $dts = '';
        for($i = 0; $i < $dlength; $i++){
            $dts.= "0";
        }

        return $dts.$last_num;
    }

}

?>
