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
        Schema::table('users', function (Blueprint $table) {
            $table->string    ('equipo')            ->nullable();
            $table->integer   ('rustdesk')          ->nullable();
            $table->string    ('sistema_operativo') ->nullable();
            $table->string    ('procesador')        ->nullable();
            $table->string    ('tipo_memoria')      ->nullable();
            $table->string    ('capacidad_memoria') ->nullable() ->after('tipo_memoria');
            $table->string    ('tipo_disco')        ->nullable();
            $table->string    ('capacidad_disco')   ->nullable();
            $table->string    ('ip_pc')             ->nullable();
            $table->string    ('ip_tel')            ->nullable();
            $table->text      ('notas')             ->nullable();
            $table->integer   ('interno')           ->nullable();
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'equipo'))            { $table->dropColumn('equipo'); }
            if (Schema::hasColumn('users', 'rustdesk'))          { $table->dropColumn('rustdesk'); }
            if (Schema::hasColumn('users', 'sistema_operativo')) { $table->dropColumn('sistema_operativo'); }
            if (Schema::hasColumn('users', 'procesador'))        { $table->dropColumn('procesador'); }
            if (Schema::hasColumn('users', 'tipo_memoria'))      { $table->dropColumn('tipo_memoria'); }
            if (Schema::hasColumn('users', 'capacidad_memoria')) { $table->dropColumn('capacidad_memoria'); }
            if (Schema::hasColumn('users', 'tipo_disco'))        { $table->dropColumn('tipo_disco'); }
            if (Schema::hasColumn('users', 'capacidad_disco'))   { $table->dropColumn('capacidad_disco'); }
            if (Schema::hasColumn('users', 'ip_pc'))             { $table->dropColumn('ip_pc'); }
            if (Schema::hasColumn('users', 'ip_tel'))            { $table->dropColumn('ip_tel'); }
            if (Schema::hasColumn('users', 'notas'))             { $table->dropColumn('notas'); }
            if (Schema::hasColumn('users', 'interno'))           { $table->dropColumn('interno'); }
        });
    }


};
