<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('locacoes')->insert([
            ['locdescricao' => 'Estante A1'],
            ['locdescricao' => 'Estante A2'],
            ['locdescricao' => 'Estante B1'],
            ['locdescricao' => 'Estante B2'],
            ['locdescricao' => 'Sala Infantil']
        ]);
    }
}
