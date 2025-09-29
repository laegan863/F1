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
        Schema::create('f3cancerdiagnoseoutcomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('code')->constrained('f3patientsurveillanceforms')->onDelete('cascade');
            $table->json('diagnosis_outcome')->nullable();
            $table->date('diagnosis_outcome_date')->nullable();

            $table->string('cause_immediate')->nullable();
            $table->string('cause_antecedent')->nullable();
            $table->string('cause_underlying')->nullable();
            $table->string('cause_other')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f3cancerdiagnoseoutcomes');
    }
};
