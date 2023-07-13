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
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('fotoPath')->nullable();
            $table->unsignedBigInteger('feira_id');
            $table->unsignedBigInteger('feirante_id');
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->foreign('feirante_id')->references('id')->on('feirantes');
            $table->timestamps();
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
