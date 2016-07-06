<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcSpendingTable extends Migration {

	public function up()
	{
		Schema::create('kfc_spending', function (Blueprint $table) {
			$table->increments('id');
			$table->boolean('active');
			$table->string('goods_or_services');
			$table->date('date');
			$table->integer('sum');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kfc_spending');
	}

}
