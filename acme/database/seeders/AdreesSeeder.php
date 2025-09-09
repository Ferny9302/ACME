<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdreesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address')->insert([
            'street_name'=>'callejon 8',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('address')->insert([
            'street_name'=>'abedul 4637',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
