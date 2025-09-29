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
        Schema::create('f3cancertreatmenthistories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('code')->constrained('f3patientsurveillanceforms')->onDelete('cascade');

            foreach (['first','second','third','fourth'] as $key) {
                $table->string("{$key}_surgery")->nullable();
                $table->string("{$key}_surgery_date")->nullable();
                $table->string("{$key}_surgery_code")->nullable();
                $table->string("{$key}_surgery_desc")->nullable();
                $table->json("{$key}_goal")->nullable();
                $table->string("{$key}_adverse_event")->nullable();
            }

            foreach (['first','second','third','fourth'] as $key) {
                $table->string("{$key}_drug")->nullable();
                $table->string("{$key}_purpose_administration")->nullable();
                $table->json("{$key}_drug_type")->nullable();
                $table->string("{$key}_drug_regimen")->nullable();
                $table->string("{$key}_drug_response")->nullable();
                $table->string("{$key}_drug_adverse")->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f3cancertreatmenthistories');
    }
};
