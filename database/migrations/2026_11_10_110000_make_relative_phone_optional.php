<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/** The nearest relative / guardian's mobile number is optional on the Form 1 demographic profile. */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('demographicprofiles', function (Blueprint $table) {
            $table->string('relative_phone_number')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('demographicprofiles', function (Blueprint $table) {
            $table->string('relative_phone_number')->nullable(false)->change();
        });
    }
};
