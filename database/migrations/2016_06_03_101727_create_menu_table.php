<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{

    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('weight');
            $table->string('url');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('menus');
    }

}
