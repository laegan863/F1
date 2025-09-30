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
        Schema::create('f4painassessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f4palliativeforms')->onDelete('cascade');
            $table->string('assessment_date')->nullable();
            $table->string('is_pain')->nullable();
            $table->string('pain_score')->nullable();
            $table->string('provocation')->nullable();
            $table->json('provocation_quality')->nullable();
            $table->text('provocation_region')->nullable();
            $table->string('provocation_remarks')->nullable();
            $table->string('severity')->nullable();
            $table->text('timing')->nullable();
            $table->text('findings')->nullable();

            $table->json('verbal_vocal')->nullable();
            $table->json('body_movement')->nullable();
            $table->json('facial')->nullable();
            $table->json('touching')->nullable();

            $table->text('associated_signs')->nullable();

            $table->json('signs')->nullable();

            $table->string('paracetamol')->nullable();
            $table->string('paracetamol_pain_controlled')->nullable();
            $table->string('paracetamol_date')->nullable();

            $table->string('nsaids')->nullable();
            $table->string('nsaids_name')->nullable();
            $table->string('nsaids_pain_controlled')->nullable();
            $table->string('nsaids_date')->nullable();

            $table->string('tramadol')->nullable();
            $table->string('tramadol_pain_controlled')->nullable();
            $table->string('tramadol_date')->nullable();

            $table->string('opioid')->nullable();
            $table->string('opioid_name')->nullable();
            $table->string('opioid_pain_controlled')->nullable();
            $table->string('opioid_date')->nullable();

            $table->string('other_drugs')->nullable();
            $table->string('other_drugs_specify_name')->nullable();
            $table->string('other_drugs_pain_controlled')->nullable();
            $table->string('other_drugs_date')->nullable();

            $table->string('non_pharma')->nullable();
            $table->string('non_pharma_specify_name')->nullable();
            $table->string('non_pharma_pain_controlled')->nullable();
            $table->string('non_pharma_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f4painassessments');
    }
};
