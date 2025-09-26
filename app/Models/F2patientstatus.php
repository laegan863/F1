<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2patientstatus extends Model
{
    protected $fillable = [
        'code',
        'ecog_status',
        'ecog_grade',
        'other_functional_assessment',
        'surgery_done',
        'surgery_rvs',
        'surgery_description',
        'surgery_date',
        'surgery_goal',
        'ongoing_drug_therapy',
        'therapy_date_start',
        'drug_purpose',
        'drug_types',
        'drug_regimen',
        'chemo_cycle',
        'drug_type_other',
    ];

    protected $casts = [
        'surgery_goal'   => 'array',
        'drug_types'     => 'array',
        'drug_regimen'   => 'array',
        'chemo_cycle'    => 'array',
    ];

    /**
     * Relationship with F2followup
     */
    public function f2followup(): BelongsTo
    {
        return $this->belongsTo(F2followup::class, 'code', 'id');
    }
}
