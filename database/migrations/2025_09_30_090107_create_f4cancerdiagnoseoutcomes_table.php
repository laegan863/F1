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
        Schema::create('f4cancerdiagnoseoutcomes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f4palliativeforms')->onDelete('cascade');
            $table->json('diagnosis_outcome')->nullable();
            $table->date('diagnosis_outcome_date')->nullable();
            $table->string('immediate_cause')->nullable();
            $table->string('antecedent_cause')->nullable();
            $table->string('underlying_cause')->nullable();
            $table->string('other_condition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f4cancerdiagnoseoutcomes');
    }
};
