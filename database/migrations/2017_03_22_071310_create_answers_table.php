<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('AnswerID');
            $table->unsignedInteger('CamperID');
            $table->unsignedInteger('QuestionID');
            $table->text('AnswerText');

            $table->foreign('CamperID')->references('CamperID')->on('campers');
            $table->foreign('QuestionID')->references('QuestionID')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
