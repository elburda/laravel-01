<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
        {
            DB::table('users')->updateOrInsert(
                ['email' => 'root@root.com'],
                [
                    'name' => 'Root',
                    'password' => Hash::make('123456'),
                    'role' => 'admin',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
}
