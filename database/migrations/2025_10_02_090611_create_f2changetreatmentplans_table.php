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
        Schema::create('f2changetreatmentplans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('code')->constrained('f2followups')->onDelete('cascade');
            $table->string('surgery_plan')->nullable();
            $table->string('treatment_plan')->nullable();
            $table->text('surgery_reason')->nullable();

            $table->string('anti_cancer_change')->nullable();
            $table->string('new_regimen')->nullable();
            $table->string('same_regimen')->nullable();
            $table->string('deferred_regimen')->nullable();
            $table->json('new_drug_type')->nullable();
            $table->json('same_drug_type')->nullable();
            $table->json('deferred_drug_type')->nullable();
            $table->json('new_drug_regimen')->nullable();
            $table->json('same_drug_regimen')->nullable();
            $table->json('deferred_drug_regimen')->nullable();
            $table->json('new_chemo_cycle')->nullable();
            $table->json('same_chemo_cycle')->nullable();
            $table->json('deferred_chemo_cycle')->nullable();
            $table->string('new_drug_other')->nullable();
            $table->string('same_drug_other')->nullable();
            $table->string('deferred_drug_other')->nullable();
            $table->string('new_next_cycle')->nullable();
            $table->string('same_next_cycle')->nullable();
            $table->string('deferred_next_cycle')->nullable();
            $table->text('deferred_reason')->nullable();

            $table->string('radio_change')->nullable();
            $table->text('radio_reason')->nullable();
            $table->string('radio_date_start')->nullable();
            $table->string('radio_date_end')->nullable();
            $table->string('radio_total_dose')->nullable();
            $table->string('radio_dose_fraction')->nullable();
            $table->string('radio_total_fractions')->nullable();
            $table->json('radio_type')->nullable();
            $table->string('radio_type_other')->nullable();

            $table->string('thera_change')->nullable();
            $table->text('thera_reason')->nullable();
            $table->json('thera_type')->nullable();
            $table->string('thera_type_other')->nullable();
            $table->string('thera_total_fractions')->nullable();
            $table->string('thera_dose_fraction')->nullable();

            $table->string('palliative')->nullable();
            $table->text('palliative_reason')->nullable();

            $table->string('other_cancer')->nullable();
            $table->json('other_cancer_type')->nullable();
            $table->string('other_cancer_other')->nullable();
            $table->text('other_cancer_reason')->nullable();

            $table->text('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f2changetreatmentplans');
    }
};
