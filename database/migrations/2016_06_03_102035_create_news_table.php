<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{

    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('title');
            $table->string('slug');
            $table->date('date_news');
            $table->longText('body');
            $table->string('image');
            $table->string('video');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('news');
    }

}
