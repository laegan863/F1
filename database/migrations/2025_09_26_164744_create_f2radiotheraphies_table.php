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
        Schema::create('f2radiotheraphies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code')->constrained('f2followups')->onDelete('cascade'); // link to patient/session

            // Radiotherapy
            $table->string('radiotherapy');
            $table->date('radio_date_start')->nullable();
            $table->date('radio_date_end')->nullable();
            $table->string('radio_total_dose')->nullable();
            $table->string('radio_dose_fraction')->nullable();
            $table->string('radio_total_fractions')->nullable();
            $table->string('radio_total_days')->nullable();

            // Body site (JSON for multiple selections)
            $table->json('radio_body_site')->nullable();
            $table->string('radio_body_site_other')->nullable();

            // Type of radiotherapy (JSON for multiple selections)
            $table->json('radio_type')->nullable();
            $table->string('radio_type_other')->nullable();

            // Goal of radiotherapy
            $table->string('radio_goal')->nullable(); // Curative / Palliative

            // Theranostics
            $table->string('theranostics'); // Yes / No
            $table->json('theranostics_type')->nullable();
            $table->string('theranostics_type_other')->nullable();

            $table->string('thera_total_planned')->nullable();
            $table->string('thera_total_received')->nullable();
            $table->string('thera_sequences')->nullable();
            $table->string('thera_goal')->nullable(); // Definitive / Palliative

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f2radiotheraphies');
    }
};
