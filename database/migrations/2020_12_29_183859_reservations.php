<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("stadium_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("seat_id");

            $table->foreign("stadium_id")->references("stadiums")->on("id")->onDelete("cascade");
            $table->foreign("user_id")->references("users")->on("id")->onDelete("cascade");
            $table->foreign("seat_id")->references("seats")->on("id")->onDelete("cascade");
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
        Schema::dropIfExists('reservations');
    }
}
