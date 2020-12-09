<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('edicao_id');
            $table->string('nome', 255);
            $table->integer('custo');
            $table->string('cor',1);
            $table->string('raridade',1);
            $table->text('descricao');
            $table->timestamps();

            $table->foreign('edicao_id')->references('id')->on('edicaos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartas');
    }
}
