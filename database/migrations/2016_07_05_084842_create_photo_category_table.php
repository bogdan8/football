<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoCategoryTable extends Migration
{

    public function up()
    {
        Schema::create('photo_category', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('title');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('photo_category');
    }

}
