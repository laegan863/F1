<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/** The patient's mobile number is optional on the Form 1 demographic profile (like the email address). */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('demographicprofiles', function (Blueprint $table) {
            $table->string('mobile_number')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('demographicprofiles', function (Blueprint $table) {
            $table->string('mobile_number')->nullable(false)->change();
        });
    }
};
