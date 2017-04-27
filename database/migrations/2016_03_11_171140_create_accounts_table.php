<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('avatar');
			$table->string('fio');
			$table->string('birthday');
			$table->string('family');
			$table->string('hobby');
			$table->string('status');
			$table->enum('pol', array('M', 'Ж', 'Unknown'))->default('Unknown');
			$table->string('group');
			$table->string('city');
			$table->string('phone');
			$table->string('url');
			$table->string('cabinet_fon');	
			$table->text('body');
			$table->integer('raiting');
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
        Schema::drop('accounts');
    }
}
