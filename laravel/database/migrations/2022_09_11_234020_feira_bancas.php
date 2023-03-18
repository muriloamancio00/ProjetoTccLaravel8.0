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
        Schema::create('feira_bancas', function (Blueprint $table) {
            $table->unsignedBigInteger('feira_id');
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->unsignedBigInteger('banca_id');
            $table->foreign('banca_id')->references('id')->on('bancas');
            $table->string('descricao');
            $table->primary(['feira_id', 'banca_id']);
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
        Schema::dropIfExists('feiras_bancas');
    }
};
