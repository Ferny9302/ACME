<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'user_id'=>1,
            'dates_id'=>1,
            'zones_id'=>1,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('projects')->insert([
            'user_id'=>2,
            'dates_id'=>2,
            'zones_id'=>2,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
