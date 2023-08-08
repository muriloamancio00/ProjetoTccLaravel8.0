<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fotoPath', function (Blueprint $table) {
            //colunas
            $table->id();
            $table->string('descricao')->nullable();
            $table->string('caminho')->unique();

            //constraint
            $table->foreign('id')->references('id')->on('bancas');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotoPath');
    }
};
