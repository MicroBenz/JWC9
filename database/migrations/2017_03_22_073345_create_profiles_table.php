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
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('FirstNameEN')->nullable();
            $table->string('LastNameEN')->nullable();
            $table->string('Nickname')->nullable();
            $table->date('Birthday')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Religion')->nullable();
            $table->unsignedInteger('SchoolID')->nullable();
            $table->string('EducationLevel')->nullable();
            $table->string('EducationMajor')->nullable();
            $table->string('ShirtSize')->nullable();
            $table->string('Allergy')->nullable();
            $table->string('DrugAllergic')->nullable();
            $table->string('FoodAllergic')->nullable();
            $table->string('FoodType')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telephone')->nullable();
            $table->unsignedInteger('ProvinceID')->nullable();
            $table->string('BloodType')->nullable();
            $table->string('EmergencyContact')->nullable();
            $table->string('EmergencyTel')->nullable();
            $table->string('EmergencyRelation')->nullable();
            $table->mediumText('ProfilePicture')->nullable();

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
