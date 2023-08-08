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
        Schema::create('eventos', function (Blueprint $table) {
            //colunas
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->integer('ativo')->nullable();
            $table->unsignedBigInteger('administrador_id');
            $table->unsignedBigInteger('feira_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();

            //constraint
            $table->foreign('administrador_id')->references('id')->on('users');
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->foreign('status_id')->references('id')->on('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
