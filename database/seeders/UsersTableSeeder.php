<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'profesion' => 'Desarrollador',
                'description' => 'Default para Administradores.',
                'img_name' => null,
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12341234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Puedes agregar más usuarios aquí
        ]);
    }
}
