<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'name' => 'Carlos',
                'email' => 'carlos@creo.com',
                'password' => Hash::make('654321'),
                'role' => 'usuario',
                'equipo' => 'Sistemas-01',
                'rusdesk' => '45324954',
                'sistema_operativo' => 'Windows 11',
                'procesador' => 'I7',
                'tipo_memoria' => 'DDR 4',
                'capacidad_memoria' => '8 GB',
                'tipo_disco' => 'SSD',
                'capacidad_disco' => '240 GB',
                'ip_pc' => '10.0.0.69',
                'ip_tel' => '10.0.5.21',
                'notas' => 'basio',
                'interno' => 'basio'
            ],
            [
                'name' => 'María',
                'email' => 'maria@pepe.com',
                'password' => Hash::make('123456'),
                'role' => 'usuario',
                'equipo' => 'Sistemas-02',
                'rusdesk' => '65432178',
                'sistema_operativo' => 'Windows 10',
                'procesador' => 'I7',
                'tipo_memoria' => 'DDR 4',
                'capacidad_memoria' => '16 GB',
                'tipo_disco' => 'SSD',
                'capacidad_disco' => '240 GB',
                'ip_pc' => '10.0.0.72',
                'ip_tel' => '10.0.5.23',
                'notas' => 'Configuración avanzada',
                'interno' => '202'
            ],
            [
                'name' => 'Pedro',
                'email' => 'pedro@pe.com',
                'password' => Hash::make('789456'),
                'role' => 'usuario',
                'equipo' => 'Soporte-01',
                'rusdesk' => '98765432',
                'sistema_operativo' => 'Windows 10',
                'procesador' => 'I5',
                'tipo_memoria' => 'DDR 3',
                'capacidad_memoria' => '8 GB',
                'tipo_disco' => 'SSD',
                'capacidad_disco' => '1 TB',
                'ip_pc' => '10.0.0.74',
                'ip_tel' => '10.0.5.25',
                'notas' => 'Equipo de soporte',
                'interno' => '115'
            ],
            [
                'name' => 'Ana',
                'email' => 'ana@maria.com',
                'password' => Hash::make('456789'),
                'role' => 'usuario',
                'equipo' => 'Sistemas-05',
                'rusdesk' => '74125896',
                'sistema_operativo' => 'Windows 11',
                'procesador' => 'I7',
                'tipo_memoria' => 'DDR 4',
                'capacidad_memoria' => '16 GB',
                'tipo_disco' => 'SSD',
                'capacidad_disco' => '240 GB',
                'ip_pc' => '10.0.0.75',
                'ip_tel' => '10.0.5.26',
                'notas' => 'Equipo de desarrollo',
                'interno' => 'BackEnd'
            ]
        ]);
    }
}
