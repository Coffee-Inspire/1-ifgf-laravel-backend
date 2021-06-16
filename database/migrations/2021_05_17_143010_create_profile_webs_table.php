<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_webs', function (Blueprint $table) {
            $table->id();
            $table->string('visionTitle');
            $table->text('visionText');
            $table->string('missionTitle');
            $table->text('missionText');
            $table->string('pastorName');
            $table->text('pastorText');
            $table->string('pastorImage');
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
        Schema::dropIfExists('profile_webs');
    }
}
