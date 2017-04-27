<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Themes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::create('themes', function (Blueprint $table) {
	  $table->increments('id');
      $table->integer('user_id');
	  $table->integer('group_id');
      $table->string('keywords');
      $table->enum('showhide', array('show', 'hide'))->default('show');
	  $table->string('visible');
	  $table->string('name');
	  $table->string('author');
	  $table->string('description');
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
     Schema::drop('themes');
    }
}
