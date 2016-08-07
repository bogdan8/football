<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('title');
			$table->integer('report_tour_id');
			$table->string('image');
			$table->string('scheme');
			$table->string('coach');
			$table->string('teams');
			$table->string('teams-goals');
			$table->string('best_player');
			$table->integer('count_games');
			$table->integer('count_win');
			$table->integer('count_draw');
			$table->integer('count_loser');
			$table->integer('count_goals');
			$table->integer('count_missing');
			$table->string('difference');
			$table->integer('points');
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
		Schema::drop('report');
	}

}
