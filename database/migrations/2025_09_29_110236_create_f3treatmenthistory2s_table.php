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
        Schema::create('f3treatmenthistory2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('code')->constrained('f3patientsurveillanceforms')->onDelete('cascade');

            foreach (['first','second','third','fourth'] as $key) {
                $table->string("{$key}_radio")->nullable();
                $table->json("{$key}_radio_type")->nullable();
                $table->string("{$key}_radio_type_other")->nullable();
                $table->string("{$key}_sequence")->nullable();
                $table->string("{$key}_treatment_goal")->nullable();
                $table->string("{$key}_radio_adverse")->nullable();
            }

            foreach (['first','second','third','fourth'] as $key) {
                $table->string("{$key}_theranostics")->nullable();
                $table->json("{$key}_thera_type")->nullable();
                $table->string("{$key}_theranostics_other_specify")->nullable();
                $table->string("{$key}_thera_goal")->nullable();
                $table->string("{$key}_thera_adverse")->nullable();
            }

            $table->string('other_cancer')->nullable();
            $table->json('other_cancer_type')->nullable();
            $table->string('cancer_type_other_specify')->nullable();

            $table->text('remarks')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('f3treatmenthistory2s');
    }
};
