<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pegawai = [
            [
                'nama'    => 'Pegawai123',
                'jabatan' => 'Admin',
                'user_id'    => '3'
            ],
            [
                'nama'    => 'Fina',
                'jabatan' => 'Admin',
                'user_id'    => '4'
            ],
        ];

        foreach($pegawai as $key => $value){
            Pegawai::create($value);
        }
    }
}
