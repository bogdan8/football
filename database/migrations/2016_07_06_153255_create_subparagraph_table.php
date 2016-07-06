<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubparagraphTable extends Migration
{

    public function up()
    {
        Schema::create('subparagraph', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('menus_id');
            $table->integer('weight');
            $table->string('url');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('subparagraph');
    }

}
