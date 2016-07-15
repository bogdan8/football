<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcRegulationsNumberTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kfc_regulations_number', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('regulations_number');
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
        Schema::drop('kfc_regulations_number');
    }

}
