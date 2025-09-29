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
        Schema::create('f4esas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f4palliativeforms')->onDelete('cascade');
            $table->string('gcs_score')->nullable();
            $table->string('esasr_score')->nullable();
            $table->integer('pain')->nullable();
            $table->integer('tiredness')->nullable();
            $table->integer('drowsiness')->nullable();
            $table->integer('nausea')->nullable();
            $table->integer('appetite')->nullable();
            $table->integer('breath')->nullable();
            $table->integer('depression')->nullable();
            $table->integer('anxiety')->nullable();
            $table->integer('wellbeing')->nullable();
            $table->string('other_problem')->nullable();
            $table->integer('other_problem_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f4esas');
    }
};
