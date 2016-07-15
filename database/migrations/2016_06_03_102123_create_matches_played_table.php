<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesPlayedTable extends Migration {

	public function up()
	{
		Schema::create('matches_played', function (Blueprint $table) {
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

	public function down()
	{
		Schema::drop('matches_played');
	}

}
