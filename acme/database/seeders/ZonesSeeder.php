<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->insert([
            'zona'=>'Zona 19',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('zones')->insert([
            'zona'=>'Zona 55',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
