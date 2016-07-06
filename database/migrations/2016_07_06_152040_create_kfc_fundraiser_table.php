<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcFundraiserTable extends Migration
{
    public function up()
    {
        Schema::create('kfc_fundraiser', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('initials');
            $table->date('date');
            $table->integer('sum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('kfc_fundraiser');
    }

}
