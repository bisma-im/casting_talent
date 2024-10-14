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
        Schema::create('profile_details', function (Blueprint $table) {
                $table->id();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('whatsapp_number');
                $table->string('email');
                $table->integer('no_of_days');
                $table->integer('no_of_hours');
                $table->integer('no_of_talents_male');
                $table->integer('no_of_talents_female');
                $table->string('required_talent');
                $table->string('nationalities');
                $table->decimal('starting_amount', 10, 2);
                $table->decimal('maximum_amount', 10, 2);
                $table->text('project_detail');
                $table->string('profile_image')->nullable(); // For the uploaded profile image
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_details');
    }
};
