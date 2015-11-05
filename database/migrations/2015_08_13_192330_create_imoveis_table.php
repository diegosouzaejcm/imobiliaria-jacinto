<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('img');
            $table->text('descricao');
            $table->string('localizacao');
            $table->string('tipo');
            $table->tinyInteger('quartos')->unsigned();
            $table->tinyInteger('vagas')->unsigned();
            $table->Integer('area')->unsigned();
            $table->tinyInteger('estado')->default(0);
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
        Schema::drop('imoveis');
    }
}
