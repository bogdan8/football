<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateTable extends Migration
{

    public function up()
    {
        Schema::create('donate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('collected_money');
            $table->integer('need_money');
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
        Schema::drop('donate');
    }

}
