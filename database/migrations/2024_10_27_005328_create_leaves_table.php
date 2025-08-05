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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("email")->nullable();
            $table->string("number")->nullable();
            $table->string("gender")->nullable();
            $table->string("maritalStatus")->nullable();
            $table->string("relationship")->nullable();
            $table->string("country")->nullable();
            $table->string("language")->nullable();
            $table->string("alternateLanguage")->nullable();


            $table->string("soldierName")->nullable();
            $table->string("soldierId")->nullable();
            $table->string("soldierEmail")->nullable();
            $table->string("currentState")->nullable();
            $table->string("soldierCountry")->nullable();
            $table->string("duration")->nullable();
            $table->tinyInteger("status")->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
