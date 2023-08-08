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
        Schema::create('bancas', function (Blueprint $table) {
            //colunas
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('feira_id');
            $table->unsignedBigInteger('feirante_id');
            $table->timestamps();

            //constraint
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->foreign('feirante_id')->references('id')->on('feirante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bancas');
    }
};
