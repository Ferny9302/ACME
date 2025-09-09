<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlueprintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blueprint')->insert([
            'nombre_plano'=>'remodelacion de casa',
            'documento'=>'documento de word',
            'projects_id'=>1,
            'version'=>1,
            'hoja'=>15,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
        DB::table('blueprint')->insert([
            'nombre_plano'=>'Construccion de hotel',
            'documento'=>'documento',
            'projects_id'=>2,
            'version'=>2,
            'hoja'=>11,
            'created_at'=>date("Y-m-d h:m:s")
        ]);
    }
}
