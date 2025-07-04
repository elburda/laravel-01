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
        Schema::create('demandas', function (Blueprint $table) {
            $table->tinyIncrements   ('demanda_id');
            $table->string           ('name', 30);
            $table->char             ('abbreviation', 3);
            $table->timestamps       ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandas');
    }
};
