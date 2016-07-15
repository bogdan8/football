<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextAndLastMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('next_and_last_matches', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->boolean('next');
			$table->boolean('last');
			$table->integer('matches_tour_id');
			$table->date('date_played');
			$table->string('date_played_hour');
			$table->string('where_played');
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
		Schema::drop('next_and_last_matches');
	}

}
