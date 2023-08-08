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
         Schema::create('feirante', function (Blueprint $table) {
             //colunas
             $table->id();
             $table->string('apelido')->nullable();
             $table->string('telefone')->nullable();

             $table->rememberToken();
             $table->timestamps();

             //relacionamento com users
             $table->foreign('id')->references('id')->on('users');

             //relacionamento com bancas -> nao necessario

         });
     }

     /**
      * Reverse the migrations.
      */
    public function down(): void
    {
        Schema::dropIfExists('feirante');
    }
};
