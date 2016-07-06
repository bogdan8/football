<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcListOfCandidatesPeopleTable extends Migration {

	public function up()
	{
		Schema::create('kfc_list_of_candidates_people', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->integer('kfc_list_of_candidates_year_id');
			$table->string('initials');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kfc_list_of_candidates_people');
	}

}
