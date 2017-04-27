<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
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
        Schema::drop('company_categories');
    }
}
