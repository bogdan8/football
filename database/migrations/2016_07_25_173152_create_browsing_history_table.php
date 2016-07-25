<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowsingHistoryTable extends Migration
{

    public function up()
    {
        Schema::create('browsing_history', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->date('date_visit');
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
        Schema::drop('browsing_history');
    }

}
