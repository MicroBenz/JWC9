<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowYouKnowUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_you_know_uses', function (Blueprint $table) {
            $table->unsignedInteger('CamperID');
            $table->unsignedInteger('ReferralID');
            
            $table->primary(['CamperID', 'ReferralID']);

            $table->foreign('CamperID')->references('CamperID')->on('campers');
            $table->foreign('ReferralID')->references('ReferralID')->on('referrals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('how_you_know_uses');
    }
}
