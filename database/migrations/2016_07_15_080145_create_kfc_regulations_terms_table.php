<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcRegulationsTermsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kfc_regulations_terms', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('kfc_regulations_number_id');
            $table->float('number');
            $table->longText('body');
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
        Schema::drop('kfc_regulations_terms');
    }

}
