<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('theme_id');
		  $table->integer('group_id');
          $table->string('keywords');
          $table->enum('showhide', array('show', 'hide'))->default('show');
          $table->string('name');
          $table->string('body');
		  $table->string('picture');
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
        Schema::drop('articles');
    }
}
