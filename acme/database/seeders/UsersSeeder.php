<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Bryan',
            'apellido'=>'Palma',
            'email'=>'fercho@hotmail.com',
            'password'=>Hash::make('123'),
            'numero'=>'636-128-4704',
            'level'=>1,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('users')->insert([
            'name'=>'joselin',
            'apellido'=>'Cera',
            'email'=>'joselinc25@hotmail.com',
            'password'=>Hash::make('321'),
            'numero'=>'636-112-1675',
            'level'=>2,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
    
}