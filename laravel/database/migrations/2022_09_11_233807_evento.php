<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('horario');
            $table->double('valor')->nullable();
            $table->integer('numeroPessoas')->nullable();
            $table->unsignedBigInteger('id_TipoEvento');
            $table->foreign('id_TipoEvento')->references('id')->on('tipoEventos');
            $table->unsignedBigInteger('id_Administrador');
            $table->foreign('id_Administrador')->references('id')->on('administradores');
            $table->unsignedBigInteger('id_Feira');
            $table->foreign('id_Feira')->references('id')->on('feiras');
            $table->integer('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
