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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('propertyID')->autoIncrement();
            $table->integer('userID')->nullable(false);
            $table->string('propertyName')->nullable(false);
            $table->decimal('price',12,2)->nullable(false);
            $table->string('contactNumber')->nullable(false);
            $table->string('location')->nullable(false);
            $table->string('otherDetails')->nullable(true);
            $table->string('type')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
