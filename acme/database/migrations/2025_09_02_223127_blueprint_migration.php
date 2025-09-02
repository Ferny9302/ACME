<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('blueprint',function(Blueprint $table){
            $table->id();
            $table->string('nombre_plano',50);
            $table->string('documento',50);
            $table->foreignId('projects_id')->constrained('projects');
            $table->integer('version');
            $table->integer('hoja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blueprint');
    }
};
