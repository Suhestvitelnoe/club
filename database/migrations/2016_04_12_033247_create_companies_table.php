<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('cat_id');
            $table->string('logo');
            $table->string('name');
            $table->string('slogan');
            $table->string('work_area');
            $table->integer('country');
            $table->integer('description');
            $table->string('adress');
            $table->string('phone');
            $table->string('mobilephone');
            $table->string('site');
            $table->string('email');
            $table->integer('raiting');
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
        Schema::drop('companies');
    }
}
