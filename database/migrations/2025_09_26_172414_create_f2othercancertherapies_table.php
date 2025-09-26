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
        Schema::create('f2othercancertherapies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f2followups')->onDelete('cascade'); 

            $table->string('other_cancer_therapies')->nullable(); // Yes / No
            $table->json('cancer_therapies')->nullable(); // multiple checkboxes
            $table->string('cancer_therapies_other')->nullable(); // text if "Others"

            $table->string('pre_op_scenario')->nullable();   // No evidence, Progressive, Not Applicable
            $table->string('post_op_scenario')->nullable();  // R0, R1, R2, R3, Unknown, Not Applicable
            $table->string('treatment_status')->nullable();  // Ongoing, Completed, etc.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f2othercancertherapies');
    }
};
