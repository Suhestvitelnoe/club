<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('article_id');
          $table->enum('showhide', array('show', 'hide'))->default('show');
          $table->string('comment');
          $table->text('body_comment');
          $table->string('picture');
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
        Schema::drop('comments');
    }
}
