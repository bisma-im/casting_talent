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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('gender');
            $table->string('nationality');
            $table->string('location');
            $table->longText('biography')->nullable();
            $table->string('languages_spoken');
            $table->string('driving_license')->nullable();
            $table->string('email')->unique();
            $table->string('height');
            $table->string('bust')->nullable();
            $table->string('waist')->nullable();
            $table->string('hip')->nullable();
            $table->string('weight');
            $table->string('eye_color');
            $table->string('hair_color');
            $table->string('hair_length');
            $table->string('shoe_size');
            $table->string('dress_size');
            $table->string('hourly_rate')->nullable();
            $table->string('session_rate')->nullable();
            $table->string('category');
            $table->string('category_type')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
