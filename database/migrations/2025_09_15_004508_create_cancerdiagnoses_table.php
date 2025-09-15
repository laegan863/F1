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
        Schema::create('cancerdiagnoses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->string('multiple_sites')->nullable();
            $table->string('primary_site_number')->nullable();
            $table->json('cancer_sites')->nullable();
            $table->string('cancer_site_other')->nullable();
            $table->string('laterality')->nullable();
            $table->string('icd_10')->nullable();
            $table->string('histologic_diagnosis')->nullable();
            $table->string('clinical_stage')->nullable();
            $table->string('t_stage')->nullable();
            $table->string('n_stage')->nullable();
            $table->string('m_stage')->nullable();
            $table->string('s_stage')->nullable();
            $table->json('other_staging')->nullable();
            $table->string('cancer_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancerdiagnoses');
    }
};
