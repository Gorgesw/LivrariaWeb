<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('usuarios')->insert([
            [
                'usunome' => 'Administrador',
                'usuemail' => 'admin@biblioteca.com',
                'ususenha' => Hash::make('123456'),
                'usutipo' => 1,
                'usudatacadastro' => now(),
                'ultacesso' => now(),
                'ususituacao' => 1
            ],
            [
                'usunome' => 'Bibliotecario',
                'usuemail' => 'usuario@biblioteca.com',
                'ususenha' => Hash::make('123456'),
                'usutipo' => 2,
                'usudatacadastro' => now(),
                'ultacesso' => now(),
                'ususituacao' => 1
            ]
        ]);
    }
}
