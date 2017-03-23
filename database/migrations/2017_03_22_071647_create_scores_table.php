<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('ScoreID');
            $table->unsignedInteger('GraderID');
            $table->unsignedInteger('AnswerID');
            $table->integer('ScoreValue');

            $table->foreign('GraderID')->references('GraderID')->on('graders');
            $table->foreign('AnswerID')->references('AnswerID')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
