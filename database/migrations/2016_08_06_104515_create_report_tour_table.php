<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_tour', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('title');
			$table->integer('matches_season_id');
			$table->integer('tour');
			$table->date('date_tour');
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
		Schema::drop('report_tour');
	}

}
