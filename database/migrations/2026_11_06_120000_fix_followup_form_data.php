<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * 1. Adds the missing "Others, specify" column for the Form 4 consult reason
 *    (the text box existed but its value was silently discarded).
 * 2. Repairs Form 2 / Form 4 entries whose primary cancer site was saved as a
 *    number ("41".."55") instead of the site name, caused by a template bug.
 */
return new class extends Migration
{
    private const NUMERIC_SITES = [
        '41' => 'Renal Pelvis/Ureters', '42' => 'Salivary Glands', '43' => 'Skin', '44' => 'Small Bowel',
        '45' => 'Soft Tissue Sarcoma', '46' => 'Spinal Cord', '47' => 'Stomach', '48' => 'Testis',
        '49' => 'Thymus', '50' => 'Thyroid', '51' => 'Unknown Primary (Occult Primary)', '52' => 'Urinary Bladder',
        '53' => 'Uterus', '54' => 'Vagina', '55' => 'Vulva',
    ];

    public function up(): void
    {
        if (!Schema::hasColumn('f4palliativeforms', 'reason_others')) {
            Schema::table('f4palliativeforms', function (Blueprint $table) {
                $table->string('reason_others')->nullable()->after('reason');
            });
        }

        foreach (['f2followups', 'f4palliativeforms'] as $table) {
            DB::table($table)->select('id', 'primary_cancer_site')->orderBy('id')->each(function ($row) use ($table) {
                $sites = json_decode((string) $row->primary_cancer_site, true);
                if (!is_array($sites)) {
                    return;
                }
                $fixed = array_map(fn ($s) => self::NUMERIC_SITES[(string) $s] ?? $s, $sites);
                if ($fixed !== $sites) {
                    DB::table($table)->where('id', $row->id)->update(['primary_cancer_site' => json_encode(array_values($fixed))]);
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('f4palliativeforms', 'reason_others')) {
            Schema::table('f4palliativeforms', function (Blueprint $table) {
                $table->dropColumn('reason_others');
            });
        }
        // The site-name repair is intentionally not reversed.
    }
};
