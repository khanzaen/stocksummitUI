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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('npm');
            $table->string('faculty');
            $table->string('study_program');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('siak_ng_screenshot');
            $table->string('cv');
            $table->string('instagram_follow');
            $table->json('share_broadcast'); // Stores multiple file paths as JSON array
            $table->string('first_choice_division');
            $table->text('first_choice_reason');
            $table->string('second_choice_division');
            $table->text('second_choice_reason');
            $table->string('portfolio')->nullable(); // Optional portfolio
            $table->string('status')->default('pending'); // Recruitment status (pending, interview, accepted, rejected)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
