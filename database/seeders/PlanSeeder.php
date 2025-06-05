<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('planes')->insert([
            [
                'plan_id' => 1,
                'titulo' => 'Mantenimiento Preventivo PYME',
                'precio' => 12000,
                'horas' => 15,
                'resumen' => 'Soporte remoto prioritario, control mensual de equipos, actualizaciones de software, y 1 visita técnica al mes. Ideal para oficinas de hasta 10 PCs.',
                'demanda_fk' => 1,
                'foto' => null,
                'foto_descripcion' => null,
                'created_at' => now(), // now() => fecha actual.
                'updated_at' => now(),
            ],
            [
                'plan_id' => 2,
                'titulo' => 'Administración de Servidores',
                'precio' => 22000,
                'horas' => 20,
                'resumen' => 'Administración remota de servidores Linux, HP, Proxmox, actualización de paquetes, gestión de usuarios y backups semanales.',
                'demanda_fk' => 2,
                'foto' => null,
                'foto_descripcion' => null,
                'created_at' => now(), // now() => fecha actual.
                'updated_at' => now(),
            ],
            [
                'plan_id' => 3,
                'titulo' => 'Soporte – Mantenimiento Preventivo',
                'precio' => 20000,
                'horas' => 15,
                'resumen' => 'Plan pensado para empresas que necesitan mantener su infraestructura en condiciones óptimas. Incluye: mantenimiento preventivo de PC (limpieza interna, revisión de componentes), formateo e instalación de sistemas operativos, configuración de entornos de trabajo, mantenimiento y limpieza de impresoras, y asistencia técnica remota para incidentes menores. Se programan visitas periódicas cada 15 días.',
                'demanda_fk' => 1,
                'foto' => null,
                'foto_descripcion' => null,
                'created_at' => now(), // now() => fecha actual.
                'updated_at' => now(),
            ],          
        ]);
    }
}
