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
        Schema::create('riskfactors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('code')->constrained('demographicprofiles')->onDelete('cascade');

            $table->string('tobacco_use')->nullable();
            $table->string('second_hand_smoke')->nullable();
            $table->string('alcohol_use')->nullable();
            $table->string('physical_activity')->nullable();

            $table->json('healtydiet')->nullable();

            $table->string('occupational_exposure');
            $table->json('occupation_specify')->nullable();

            $table->string('air_pollution')->nullable();

            $table->string('family_history')->nullable();
            $table->json('cancer_sites')->nullable();
            $table->string('cancer_sites_other')->nullable();
            $table->string('cancer_sites_other_value')->nullable();

            $table->json('infections')->nullable();
            $table->string('infections_others')->nullable();
            $table->string('infections_other_content')->nullable();

            $table->json('comorbidities')->nullable();
            $table->string('comorbidities_others')->nullable();
            $table->string('comorbidities_others_content')->nullable();

            $table->string('has_cancer')->nullable();
            $table->json('patient_diagnosed_w_cancer')->nullable();

            $table->text('other_significant_medical_history')->nullable();

            $table->string('sexual_orientation')->nullable();
            $table->string('sexual_orientation_other')->nullable();

            $table->string('sexual_partners')->nullable();
            $table->string('age_first_intercourse')->nullable();

            $table->string('contraceptives_use')->nullable();
            $table->json('contraceptive_types')->nullable();
            $table->string('contraceptive_types_other')->nullable();

            $table->json('cancer_screening')->nullable();
            $table->string('cancer_screening_other')->nullable();

            $table->string('vaccine_hpv')->nullable();
            $table->string('vaccine_hepb')->nullable();
            $table->string('other_vaccines')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('riskfactors');
    }
};
