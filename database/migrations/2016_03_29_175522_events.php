<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('events', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('title');
            $table->text('body');
            $table->timestamp('date');
            $table->text('location');
			$table->integer('user_id');
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
        Schema::drop('events');
    }
}
