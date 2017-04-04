<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campers', function (Blueprint $table) {
            $table->increments('CamperID');
            $table->string('FacebookUniqueID');
            $table->unsignedInteger('TeamID');
            $table->boolean('IsLock');

            $table->foreign('FacebookUniqueID')->references('FacebookUniqueID')->on('fbaccounts');
            $table->foreign('TeamID')->references('TeamID')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campers');
    }
}
