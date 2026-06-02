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
    Schema::create('emprestimos', function (Blueprint $table) {
        $table->id('empcodigo');

        $table->bigInteger('pescodigo');
        $table->bigInteger('livcodigo');

        $table->timestamp('empdata');
        $table->timestamp('prevdata');
        $table->timestamp('devdata')->nullable();

        $table->smallInteger('sitcodigo');

        $table->foreign('pescodigo')
            ->references('pescodigo')
            ->on('pessoas');

        $table->foreign('livcodigo')
            ->references('livcodigo')
            ->on('livros');

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
