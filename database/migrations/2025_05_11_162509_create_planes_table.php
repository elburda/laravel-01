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
        Schema::create('planes', function (Blueprint $table) {
            $table->id('plan_id');
            $table->string('titulo', 100);
            $table->unsignedInteger('precio');
            $table->unsignedInteger('horas');
            $table->text('resumen');
            $table->string('foto')->nullable();
            $table->string('foto_descripcion')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes');
    }
};