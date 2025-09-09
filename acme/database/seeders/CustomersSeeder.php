<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'RFC'=>'PAMB-020309-C40',
            'user_id'=>1,
            'address_id'=>1,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('customers')->insert([
            'RFC'=>'CEV-030925-D69',
            'user_id'=>2,
            'address_id'=>2,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
