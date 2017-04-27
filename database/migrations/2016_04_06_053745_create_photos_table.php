<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('cat_id');
          $table->string('keywords');
          $table->enum('showhide', array('show', 'hide'))->default('show');
          $table->string('name');
          $table->string('photo');
          $table->string('slug');
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
        Schema::drop('photos');
    }
}
