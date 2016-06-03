<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdultTable extends Migration {

	public function up()
	{
		Schema::create('adult', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('title');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('adult');
	}

}
