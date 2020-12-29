<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("home_id");
            $table->unsignedBigInteger("away_id");
            $table->foreign("home_id")->references("users")->on("id")->onDelete("cascade");
            $table->foreign("away_id")->references("users")->on("id")->onDelete("cascade");
            $table->string("venue");
            $table->dateTime("date_time");
            $table->string("main_referee");
            $table->string("linesmen_1");
            $table->string("linesmen_2");
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
        Schema::dropIfExists('matches');
    }
}
