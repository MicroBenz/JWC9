<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedInteger('CamperID')->primary();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('FirstNameEN');
            $table->string('LastNameEN');
            $table->string('Nickname');
            $table->date('Birthday');
            $table->string('Gender');
            $table->string('Religion');
            $table->unsignedInteger('SchoolID');
            $table->string('EducationLevel');
            $table->string('EducationMajor');
            $table->string('ShirtSize');
            $table->string('Allergy');
            $table->string('DrugAllergic');
            $table->string('FoodAllergic');
            $table->string('FoodType');
            $table->string('Email');
            $table->string('Telephone');
            $table->unsignedInteger('ProvinceID');
            $table->string('BloodType');
            $table->string('EmergencyContact');
            $table->string('EmergencyTel');
            $table->string('EmergencyRelation');
            $table->text('activities');
            $table->mediumText('ProfilePicture');

            $table->foreign('CamperID')->references('CamperID')->on('campers');
            $table->foreign('SchoolID')->references('SchoolID')->on('schools');
            $table->foreign('ProvinceID')->references('ProvinceID')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
