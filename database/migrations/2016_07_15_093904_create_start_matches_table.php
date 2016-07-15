<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartMatchesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('matches_tour_id');
            $table->date('date_played');
            $table->string('title_one_team');
            $table->integer('count_one_team');
            $table->string('title_second_team');
            $table->integer('count_second_team');
            $table->integer('adult_id');
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
        Schema::drop('start_matches');
    }

}
