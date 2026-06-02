<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmprestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('emprestimos')->insert([
            [
                'pescodigo' => 1,
                'livcodigo' => 1,
                'empdata' => now()->subDays(10),
                'prevdata' => now()->subDays(3),
                'devdata' => null,
                'sitcodigo' => 3
            ],
            [
                'pescodigo' => 2,
                'livcodigo' => 2,
                'empdata' => now()->subDays(5),
                'prevdata' => now()->addDays(5),
                'devdata' => null,
                'sitcodigo' => 1
            ],
            [
                'pescodigo' => 3,
                'livcodigo' => 3,
                'empdata' => now()->subDays(20),
                'prevdata' => now()->subDays(10),
                'devdata' => now()->subDays(8),
                'sitcodigo' => 2
            ]
        ]);
    }
}
