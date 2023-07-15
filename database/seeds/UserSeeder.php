<?php

use Illuminate\Database\Seeder;
use App\User;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name'    => 'Admin Koko',
                'level' => 'admin',
                'email'    => 'adminkoko@peso.co.id',
                'remember_token' => Str::random(60),
                'password'    => bcrypt('adminkoko1234')
            ],
            [
                'name'    => 'Meme Ike',
                'level' => 'admin',
                'email'    => 'meme_ike@peso.co.id',
                'remember_token' => Str::random(60),
                'password'    => bcrypt('memeike1234')
            ],
            [
                'name'    => 'Pegawai123',
                'level' => 'pegawai',
                'email'    => 'pegawai@peso.co.id',
                'remember_token' => Str::random(60),
                'password'    => bcrypt('pegawai1234')
            ],
            [
                'name'    => 'Fina',
                'level' => 'pegawai',
                'email'    => 'fina@peso.co.id',
                'remember_token' => Str::random(60),
                'password'    => bcrypt('fina1234')
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
