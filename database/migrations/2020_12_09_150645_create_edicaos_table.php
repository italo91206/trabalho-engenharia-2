<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edicaos', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('formato_id');
            $table->string('nome', 255);
            $table->timestamps();

            $table->foreign('formato_id')->references('id')->on('formatos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edicaos');
    }
}
