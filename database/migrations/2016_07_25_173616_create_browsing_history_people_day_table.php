<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowsingHistoryPeopleDayTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browsing_history_people_day', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('browsing_history_people_id');
            $table->string('day_name');
            $table->integer('count_visit');
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
        Schema::drop('browsing_history_people_day');
    }

}
