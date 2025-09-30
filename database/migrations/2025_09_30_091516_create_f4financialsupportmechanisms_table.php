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
        Schema::create('f4financialsupportmechanisms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('code')->constrained('f4palliativeforms')->onDelete('cascade');
            $table->enum('financial_support', ['Yes', 'No'])->nullable();

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
        Schema::dropIfExists('f4financialsupportmechanisms');
    }
};
