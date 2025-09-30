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
        Schema::create('f4palliativecares', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('code')->constrained('f4palliativeforms')->onDelete('cascade'); // to link with patient/session if needed

            // Care interventions
            $table->string('nutritional_care')->nullable();
            $table->string('nutritional_place')->nullable();
            $table->string('nutritional_improved')->nullable();

            $table->string('nursing_care')->nullable();
            $table->string('nursing_place')->nullable();
            $table->string('nursing_improved')->nullable();

            $table->string('rehabilitation_care')->nullable();
            $table->string('rehabilitation_place')->nullable();
            $table->string('rehabilitation_improved')->nullable();

            $table->string('psychosocial_care')->nullable();
            $table->string('psychosocial_place')->nullable();
            $table->string('psychosocial_improved')->nullable();

            $table->string('spiritual_care')->nullable();
            $table->string('spiritual_place')->nullable();
            $table->string('spiritual_improved')->nullable();

            // Others (with specify)
            $table->string('others_care')->nullable();
            $table->string('others_specify')->nullable();
            $table->string('others_place')->nullable();
            $table->string('others_improved')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f4palliativecares');
    }
};
