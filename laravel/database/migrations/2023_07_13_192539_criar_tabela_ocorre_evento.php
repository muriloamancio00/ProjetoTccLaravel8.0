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
        Schema::create('ocorreEventos', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('eventos');
            $table->integer('data');
            $table->string('horarioInicio')->nullable();
            $table->string('horarioFim')->nullable();
            $table->unsignedBigInteger('eventoStatus_id');
            $table->foreign('eventoStatus_id')->references('status_id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorreEventos');
    }
};
