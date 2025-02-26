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
        Schema::create('model_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('nationality');
            $table->string('calling_number');
            $table->string('whatsapp_number')->nullable();
            $table->string('marital_status');
            $table->string('ethnicity');
            $table->string('location');
            $table->text('biography')->nullable();
            $table->string('languages_spoken');
            $table->string('driving_license')->nullable();
            $table->string('email')->unique();
            $table->string('instagram_username')->nullable();
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
            $table->string('musician_categories')->nullable();
            $table->string('profile_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_details');
    }
};
