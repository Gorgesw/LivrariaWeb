<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('livros', function (Blueprint $table) {
            $table->id('livcodigo')->primary();
            $table->string('livtitulo', 200);
            $table->string('autnome', 200);

            $table->bigInteger('catcodigo');
            $table->integer('anopublicacao');

            $table->integer('qnttotal');
            $table->integer('qntdisponivel');
            $table->integer('qntemprestada');

            $table->bigInteger('loccodigo');

            $table->foreign('catcodigo')
                ->references('catcodigo')
                ->on('categorias');

            $table->foreign('loccodigo')
                ->references('loccodigo')
                ->on('locacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
