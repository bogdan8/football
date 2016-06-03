<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsPhotoTable extends Migration
{

    public function up()
    {
        Schema::create('news_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('news_id');
            $table->integer('weight');
            $table->string('image');
            $table->string('image_url');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('news_photo');
    }


}
