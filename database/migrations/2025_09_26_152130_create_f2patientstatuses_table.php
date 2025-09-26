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
        Schema::create('f2patientstatuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f2followups')->onDelete('cascade');
            $table->string('ecog_status');
            $table->string('ecog_grade')->nullable();
            $table->string('other_functional_assessment')->nullable();
            $table->string('surgery_done');
            $table->string('surgery_rvs')->nullable();
            $table->string('surgery_description')->nullable();
            $table->string('surgery_date')->nullable();
            $table->json('surgery_goal')->nullable();
            $table->string('ongoing_drug_therapy');
            $table->string('therapy_date_start')->nullable();
            $table->string('drug_purpose')->nullable();
            $table->json('drug_types')->nullable();
            $table->json('drug_regimen')->nullable();
            $table->json('chemo_cycle')->nullable();
            $table->string('drug_type_other')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f2patientstatuses');
    }
};
