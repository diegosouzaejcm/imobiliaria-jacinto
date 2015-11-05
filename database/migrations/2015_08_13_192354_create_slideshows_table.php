<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideshowsTable extends Migration
{
    public function up()
    {
        Schema::create('slideshows', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('posicao');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('slideshows');
    }
}
