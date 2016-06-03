<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandingsTable extends Migration
{

    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('adult_id');
            $table->integer('team_id');
            $table->integer('count_games');
            $table->integer('count_win');
            $table->integer('count_draw');
            $table->integer('cont_loser');
            $table->integer('count_goals');
            $table->integer('count_missing');
            $table->string('difference');
            $table->integer('points');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('standings');
    }

}
