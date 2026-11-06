<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Brings saved checkbox answers in line with the official printed forms:
 *  - CSPMAP / other medicine names saved by the old input lists are renamed
 *    to their official equivalents (config('cbcr_options.medicine_renames')).
 *    Names with no official equivalent are left unchanged.
 *  - "IMRT/IMAT/Helical" (typo in the old Form 2 input) becomes "IMRT/VMAT/Helical".
 */
return new class extends Migration
{
    private function renameInJsonColumn(string $table, string $column, array $map): void
    {
        DB::table($table)->select('id', $column)->whereNotNull($column)->orderBy('id')
            ->each(function ($row) use ($table, $column, $map) {
                $values = json_decode((string) $row->{$column}, true);
                if (!is_array($values)) {
                    return;
                }
                $fixed = array_values(array_unique(array_map(fn ($v) => is_string($v) ? ($map[$v] ?? $v) : $v, $values)));
                if ($fixed !== $values) {
                    DB::table($table)->where('id', $row->id)->update([$column => json_encode($fixed)]);
                }
            });
    }

    public function up(): void
    {
        $medicines = config('cbcr_options.medicine_renames');
        foreach (['f2cancerdiagnoseoutcomes', 'f3financialsupports', 'f4financialsupportmechanisms'] as $table) {
            $this->renameInJsonColumn($table, 'cspmap_meds', $medicines);
            $this->renameInJsonColumn($table, 'other_meds', $medicines);
        }

        $imrt = ['IMRT/IMAT/Helical' => 'IMRT/VMAT/Helical'];
        $this->renameInJsonColumn('f2radiotheraphies', 'radio_type', $imrt);
        $this->renameInJsonColumn('f2changetreatmentplans', 'radio_type', $imrt);
    }

    public function down(): void
    {
        // Renames to the official names are intentionally not reversed.
    }
};
