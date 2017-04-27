<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewLetters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->integer('sender_id');
            $table->integer('recieve_id');
            $table->string('theme');
            $table->text('body');
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
       Schema::drop('newletters');
    }
}
