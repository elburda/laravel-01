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
        Schema::table('planes', function (Blueprint $table) {
            $table->unsignedTinyInteger  ('demanda_fk');
            
            $table  ->foreign              ('demanda_fk')
                    ->references           ('demanda_id')
                    ->on                   ('demandas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('planes', function (Blueprint $table) {
            $table->dropForeign   (['demanda_fk']);
            $table->dropColumn    ('demanda_fk');
        });
    }

};
