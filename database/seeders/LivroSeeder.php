<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('livros')->insert([
            [
                'livtitulo' => 'Dom Casmurro',
                'autnome' => 'Machado de Assis',
                'catcodigo' => 1,
                'anopublicacao' => 1899,
                'qnttotal' => 10,
                'qntdisponivel' => 8,
                'qntemprestada' => 2,
                'loccodigo' => 1
            ],
            [
                'livtitulo' => 'O Iluminado',
                'autnome' => 'Stephen King',
                'catcodigo' => 2,
                'anopublicacao' => 1977,
                'qnttotal' => 5,
                'qntdisponivel' => 4,
                'qntemprestada' => 1,
                'loccodigo' => 2
            ],
            [
                'livtitulo' => 'Clean Code',
                'autnome' => 'Robert C. Martin',
                'catcodigo' => 3,
                'anopublicacao' => 2008,
                'qnttotal' => 7,
                'qntdisponivel' => 5,
                'qntemprestada' => 2,
                'loccodigo' => 3
            ]
        ]);
    }
}
