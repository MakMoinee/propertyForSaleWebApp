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
        Schema::create('system_users', function (Blueprint $table) {
            $table->id('userID')->autoIncrement();
            $table->string('email')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('firstName')->nullable(false);
            $table->string('middleName')->nullable(true);
            $table->string('lastName')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('countryCode')->nullable(false);
            $table->string('phoneNumber')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->date('birthDate')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('profile')->nullable(true);
            $table->string('status')->nullable(false);
            $table->string('approval')->nullable(false);
            $table->string('licenseImage')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_users');
    }
};
