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
        Schema::create('demographicprofiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->json('name');
            $table->string('married_maiden_name')->nullable();
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('nationality');
            $table->json('permanent');
            $table->json('current')->nullable();
            $table->string('same_as_address');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->json('relative');
            $table->string('relative_phone_number');
            $table->string('relative_email');
            $table->string('highest_education');
            $table->string('occupation');
            $table->string('number_of_years_in_occupation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demographicprofiles');
    }
};
