<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColecaoCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecao_cartas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carta_id');
            $table->unsignedBigInteger('colecao_id');
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('CASCADE');
            $table->foreign('colecao_id')->references('id')->on('colecaos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colecao_cartas');
    }
}
