<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcListOfCandidatesYearTable extends Migration {

	public function up()
	{
		Schema::create('kfc_list_of_candidates_year', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('years');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kfc_list_of_candidates_year');
	}

}
