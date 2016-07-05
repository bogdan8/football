<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{

    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
			$table->integer('photo_category_id');
            $table->string('title');
            $table->string('image');
            $table->string('image_url');
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
        Schema::drop('gallery');
    }

}
