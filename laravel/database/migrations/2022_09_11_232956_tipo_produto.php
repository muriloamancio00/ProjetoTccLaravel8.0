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
        Schema::create('tipoProdutos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descricao')->nullable();
            $table->integer('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *    
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoProdutos');
    }
};
