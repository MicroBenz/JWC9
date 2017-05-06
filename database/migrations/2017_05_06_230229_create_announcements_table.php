<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->unsignedInteger('CamperID')->primary();
            $table->string('FacebookUniqueID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Nickname');
            $table->string('Telephone');
            $table->string('Gender');
            $table->unsignedInteger('TeamID');
            $table->float('Money', 8, 2);
            $table->unsignedInteger('Checked');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
