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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('pescodigo')->primary();
            $table->string('pesnome', 200);
            $table->string('pesendereco', 300)->nullable();
            $table->string('pestelefone', 30)->nullable();
            $table->smallInteger('pessexo');
            $table->string('pescpf', 14)->unique();

            $table->check('pessexo IN (1,2)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
