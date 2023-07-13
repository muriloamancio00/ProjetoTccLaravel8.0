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
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('banca_id');
            $table->unsignedBigInteger('bancaFeirante_id');
            $table->unsignedBigInteger('bancaFeira_id');
            $table->foreign('banca_id')->references('id')->on('bancas');
            $table->foreign('bancaFeirante_id')->references('feirante_id')->on('bancas');
            $table->foreign('bancaFeira_id')->references('feira_id')->on('bancas');
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
