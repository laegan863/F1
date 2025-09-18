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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('code')->constrained('demographicprofiles')->onDelete('cascade');

            // Q56: Date of Diagnosis
            $table->date('date_of_diagnosis')->nullable();

            // Q57: Multidisciplinary Team
            $table->string('team_approach')->nullable(); // Yes / No
            $table->json('disciplines')->nullable();
            $table->string('discipline_other')->nullable();

            // Q58: Surgery
            $table->string('surgery')->nullable(); // Yes / No
            $table->json('surgery_goal')->nullable();

            // Q59: Anti-cancer Drug
            $table->string('anticancer_drug')->nullable(); // Yes / No
            $table->json('drug_purpose')->nullable();
            $table->json('drug_types')->nullable();

            // Q60: First Line Anti-cancer Drug
            $table->string('first_line_drug')->nullable();
            $table->string('first_drug_regimen')->nullable();
            $table->integer('first_cycles')->nullable();
            $table->string('first_treatment_goal')->nullable();
            $table->string('first_time')->nullable();

            // Q61: Second Line Anti-cancer Drug
            $table->string('second_line_drug')->nullable();
            $table->string('second_drug_regimen')->nullable();
            $table->integer('second_cycles')->nullable();
            $table->string('second_treatment_goal')->nullable();
            $table->string('second_time')->nullable();

            // Q62: Third Line Anti-cancer Drug
            $table->string('third_line_drug')->nullable();
            $table->string('third_drug_regimen')->nullable();
            $table->integer('third_cycles')->nullable();
            $table->string('third_treatment_goal')->nullable();
            $table->string('third_time')->nullable();

            // Q63: Other Subsequent Anti-cancer Drug
            $table->string('other_subsequent_line_drug')->nullable();
            $table->string('indicate_line')->nullable();
            $table->string('other_subsequent_drug_regimen')->nullable();
            $table->integer('other_subsequent_cycles')->nullable();
            $table->string('other_subsequent_treatment_goal')->nullable();
            $table->string('other_subsequent_time')->nullable();

            // Q64: Radiotherapy
            $table->string('radiotherapy')->nullable();
            $table->json('radiotherapy_types')->nullable();
            $table->string('radiotherapy_types_others')->nullable();
            $table->string('radiotherapy_sequence')->nullable();
            $table->string('radiotherapy_goal')->nullable();

            // Q65: Theranostics
            $table->string('theranostics')->nullable();
            $table->json('theranostics_types')->nullable();
            $table->string('theranostics_types_others')->nullable();
            $table->string('theranostics_goal')->nullable();

            // Q66–68: Other Cancer Directed Therapies
            $table->string('other_therapies')->nullable();
            $table->json('other_therapies_types')->nullable();
            $table->string('other_therapies_other')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
