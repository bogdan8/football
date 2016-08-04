<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowsingHistoryPeopleDaySchoolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('browsing_history_people_day_school', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->integer('browsing_history_people_day_in_month_school_id');
			$table->string('day_visit');
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
		Schema::drop('browsing_history_people_day_school');
	}

}
