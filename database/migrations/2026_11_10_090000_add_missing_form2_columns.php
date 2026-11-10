<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * These columns were added to the original "create" migrations after those
 * tables already existed on the servers, so existing databases never got
 * them. Saving the Form 2 ECOG page then fails with
 * "Unknown column 'remarks' in 'field list'".
 * Each column is only added where it is missing, so this is safe everywhere.
 */
return new class extends Migration
{
    private const COLUMNS = [
        'f2patientstatuses'      => ['remarks' => 'drug_type_other'],
        'f2changetreatmentplans' => ['palliative_reason' => 'palliative'],
    ];

    public function up(): void
    {
        foreach (self::COLUMNS as $table => $columns) {
            foreach ($columns as $column => $after) {
                if (!Schema::hasColumn($table, $column)) {
                    Schema::table($table, function (Blueprint $t) use ($table, $column, $after) {
                        $col = $t->string($column)->nullable();
                        if (Schema::hasColumn($table, $after)) {
                            $col->after($after);
                        }
                    });
                }
            }
        }
    }

    public function down(): void
    {
        // Not reversed: the columns belong to the original schema.
    }
};
