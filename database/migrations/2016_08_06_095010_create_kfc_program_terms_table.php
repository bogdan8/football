<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKfcProgramTermsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kfc_program_terms', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->integer('kfc_program_number_id');
            $table->integer('number');
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
        Schema::drop('kfc_program_terms');
    }

}
