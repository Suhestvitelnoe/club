<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('groups', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('user_id');
		$table->string('name');
		$table->text('body');
		$table->enum('showhide',array('show','hide'));
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
       Schema::drop('groups');
    }
}
