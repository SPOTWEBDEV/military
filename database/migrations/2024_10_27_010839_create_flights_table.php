<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("number")->nullable();
            $table->string("email")->nullable();


            $table->string("soldierName")->nullable();
            $table->string("soldierId")->nullable();
            $table->string("soldierEmail")->nullable();
            $table->string("currentState")->nullable();
            $table->string("country")->nullable();
            $table->string("transitType")->nullable();
            $table->string("state")->nullable();
            $table->string("destinationCountry")->nullable();
            $table->string("endOfDeparture")->nullable();
            $table->string("flightClass")->nullable();
            $table->string("numberOfAdults")->nullable();
            $table->string("numberOfChildren")->nullable();
            $table->tinyInteger("status")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
