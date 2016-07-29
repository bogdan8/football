<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowsingHistoryPeopleDayInMonthTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('browsing_history_people_day_in_month', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('title');
			$table->integer('browsing_history_id');
			$table->integer('browsing_history_people_id');
			$table->string('day_name');
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
		Schema::drop('browsing_history_people_day_in_month');
	}

}
