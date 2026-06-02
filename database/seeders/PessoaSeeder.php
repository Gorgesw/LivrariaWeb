<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('pessoas')->insert([
            [
                'pesnome' => 'João Silva',
                'pesendereco' => 'Rua A, 100',
                'pestelefone' => '(47)99999-1111',
                'pessexo' => 1,
                'pescpf' => '11111111111'
            ],
            [
                'pesnome' => 'Maria Souza',
                'pesendereco' => 'Rua B, 200',
                'pestelefone' => '(47)99999-2222',
                'pessexo' => 2,
                'pescpf' => '22222222222'
            ],
            [
                'pesnome' => 'Carlos Oliveira',
                'pesendereco' => 'Rua C, 300',
                'pestelefone' => '(47)99999-3333',
                'pessexo' => 1,
                'pescpf' => '33333333333'
            ]
        ]);
    }
}
