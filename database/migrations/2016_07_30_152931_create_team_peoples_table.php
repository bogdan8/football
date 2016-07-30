<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamPeoplesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_peoples', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->integer('team_peoples_position_id');
			$table->integer('number_people');
			$table->string('name');
			$table->string('last_name');
			$table->string('surname');
			$table->date('date_of_birth');
			$table->integer('license_number');
			$table->string('image');
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
		Schema::drop('team_peoples');
	}

}
