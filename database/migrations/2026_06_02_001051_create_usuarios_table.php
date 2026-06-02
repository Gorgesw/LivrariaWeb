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
            $table->id('usucodigo');
            $table->string('usunome', 200);
            $table->string('usuemail', 200)->unique();
            $table->string('ususenha', 255);
            $table->smallInteger('usutipo');
            $table->timestamp('usudatacadastro');
            $table->timestamp('ultacesso')->nullable();
            $table->smallInteger('ususituacao');

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
