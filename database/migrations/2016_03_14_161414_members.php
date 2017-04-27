<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('members', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('user_id');
		$table->integer('group_id');
		$table->enum('showhide',array('show','hide'));
		$table->integer('owner_id');
		$table->string('status');
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
       Schema::drop('members');
    }
}
