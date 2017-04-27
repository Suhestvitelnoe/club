<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('cat_id');
            $table->string('executor');
            $table->string('same_executor');
            $table->string('name');
            $table->string('album');
            $table->integer('birthday');
            $table->string('picture');
            $table->string('ringhtone');
            $table->string('lirycs');
            $table->string('translate');
            $table->string('tags');
            $table->enum('lang', array('ru', 'en', 'french', ))->default('en');
            $table->enum('showhide', array('show', 'hide'))->default('show');
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
        Schema::drop('musics');
    }
}
