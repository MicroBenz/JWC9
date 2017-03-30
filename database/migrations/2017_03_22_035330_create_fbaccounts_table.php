<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fbaccounts', function (Blueprint $table) {
            $table->string('FacebookUniqueID')->unique();
            $table->string('FacebookName');
            $table->string('FacebookEmail')->nullable();
            $table->string('FacebookAvatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbaccounts');
    }
}
