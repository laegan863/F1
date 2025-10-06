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
        Schema::create('f4palliativeforms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hospitalID');
            $table->string('date');
            $table->json('name');
            $table->json('primary_cancer_site');
            $table->string('primary_cancer_site_other')->nullable();
            $table->string('laterality');
            $table->string('histologic_diagnosis');
            $table->string('icd10');
            $table->string('clinical_stage')->nullable();
            $table->json('stage')->nullable();
            $table->json('other_staging')->nullable();
            $table->string('other_remarks')->nullable();
            $table->string('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f4palliativeforms');
    }
};
