<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionTable extends Migration
{

    public function up()
    {
        Schema::create('discussion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('title');
            $table->longText('body');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('discussion');
    }

}
