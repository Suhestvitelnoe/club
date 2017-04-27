<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photocategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('photocategory', function (Blueprint $table) {
          $table->increments('id');
          $table->enum('showhide', array('show', 'hide'))->default('show');
          $table->string('name');
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
         Schema::drop('photocategory');
    }
}
