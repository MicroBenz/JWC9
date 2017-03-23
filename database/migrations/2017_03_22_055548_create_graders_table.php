<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graders', function (Blueprint $table) {
            $table->increments('GraderID');
            $table->string('FacebookUniqueID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email');
            $table->unsignedInteger('TeamID');

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
        Schema::dropIfExists('graders');
    }
}
