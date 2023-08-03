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
        Schema::create('feiras', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->string('horarioFim')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('administrador_id');
            $table->unsignedBigInteger('diaSemana_id');
            $table->unsignedBigInteger('horarioFeira_id');
            $table->foreign('administrador_id')->references('id')->on('users');
            $table->foreign('diaSemana_id')->references('id')->on('diaSemana');
            $table->foreign('horarioFeira_id')->references('id')->on('horarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feiras');
    }
};
