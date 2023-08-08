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
            //colunas
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->string('horarioFim')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('administrador_id')->default(1);
            $table->unsignedBigInteger('diaSemana_id')->default(1);
            $table->unsignedBigInteger('horarioFeira_id')->default(1);

            //constraint
            $table->foreign('diaSemana_id')->references('id')->on('diaSemana');
            $table->foreign('horarioFeira_id')->references('id')->on('horarios');

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
