<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(AdreesSeeder::class);
        $this->call(DatesSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(ZonesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(BlueprintsSeeder::class);
      
    }
}
