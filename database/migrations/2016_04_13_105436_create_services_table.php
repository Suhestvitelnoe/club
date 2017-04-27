<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('user_id');
            $table->integer('cat_id');
            $table->integer('company_id');
            $table->string('name');
            $table->string('picture');
            $table->string('description');
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
        Schema::drop('services');
    }
}
