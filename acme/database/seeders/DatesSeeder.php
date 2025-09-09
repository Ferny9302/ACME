<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dates')->insert([
            'fecha_actualizacion_ant'=>'2025-09-09',
            'fecha_actualizacion'=>'2025-10-09',
            'fecha_entrega'=>'2025-12-12',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('dates')->insert([
            'fecha_actualizacion_ant'=>'2025-10-10',
            'fecha_actualizacion'=>'2025-11-09',
            'fecha_entrega'=>'2026-03-09',
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
