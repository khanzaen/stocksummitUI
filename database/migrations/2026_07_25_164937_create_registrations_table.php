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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('track'); // Equity Research / Trading
            $table->string('university');
            
            // Leader Details
            $table->string('leader_name');
            $table->string('leader_npm');
            $table->string('leader_email');
            $table->string('leader_whatsapp');
            $table->string('leader_ktm'); // Path to KTM file

            // Member 1 Details (Nullable, since Trading can be 1 member)
            $table->string('member1_name')->nullable();
            $table->string('member1_npm')->nullable();
            $table->string('member1_email')->nullable();
            $table->string('member1_ktm')->nullable();

            // Member 2 Details (Nullable, since Trading is max 2 and Equity Research is max 3)
            $table->string('member2_name')->nullable();
            $table->string('member2_npm')->nullable();
            $table->string('member2_email')->nullable();
            $table->string('member2_ktm')->nullable();

            // Payment Proof
            $table->string('proof_payment');
            $table->string('proof_follow')->nullable(); // Proof of follow (optional)

            $table->string('status')->default('pending'); // pending, verified, rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
