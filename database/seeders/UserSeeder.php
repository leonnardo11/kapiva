<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'ADMIN',
                                    'surname'=>'ADMIN',
                                    'email'=>'admin@admin',
                                    'telefone'=>'00000000',
                                    'cpf' =>'00000000000',
                                    'password'=>Hash::make('admin'),
                                    'role'=>'admin'
        ]);
    }
}
