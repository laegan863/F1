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
        Schema::create('f2cancerdiagnoseoutcomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->constrained('f2followups')->onDelete('cascade'); 

            $table->json('diagnosis_outcome')->nullable();
            $table->date('diagnosis_outcome_date')->nullable();

            $table->string('cause_immediate')->nullable();
            $table->string('cause_antecedent')->nullable();
            $table->string('cause_underlying')->nullable();
            $table->string('cause_other')->nullable();

            $table->string('financial_support')->nullable();
            $table->json('financial_type')->nullable();
            $table->string('financial_other')->nullable();

            $table->json('cspmap_meds')->nullable();
            $table->string('cspmap_other')->nullable();

            $table->json('other_meds')->nullable();
            $table->string('other_med_other')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f2cancerdiagnoseoutcomes');
    }
};
