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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('usucodigo')->primary();
            $table->string('usunome', 200);
            $table->string('usuemail', 200)->unique();
            $table->string('ususenha', 255);
            $table->smallInteger('usutipo');
            $table->timestamp('usudatacadastro');
            $table->timestamp('ultacesso')->nullable();
            $table->smallInteger('ususituacao');

            $table->check('usutipo IN (1,2)');
            $table->check('ususituacao IN (1,2,3)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
