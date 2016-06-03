<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{

    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->longText('logotype');
            $table->string('title');
            $table->integer('adult_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('team');
    }

}
