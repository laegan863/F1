<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2cancerdiagnoseoutcome extends Model
{
    protected $table = 'f2cancerdiagnoseoutcomes';

    protected $fillable = [
        'code',

        'diagnosis_outcome',
        'diagnosis_outcome_date',

        'cause_immediate',
        'cause_antecedent',
        'cause_underlying',
        'cause_other',

        'financial_support',
        'financial_type',
        'financial_other',

        'cspmap_meds',
        'cspmap_other',

        'other_meds',
        'other_med_other',
    ];

    protected $casts = [
        'diagnosis_outcome' => 'array',
        'financial_type'    => 'array',
        'cspmap_meds'       => 'array',
        'other_meds'        => 'array',
    ];

    public function F2followup(){
        return $this->belongsTo(F2followup::class, 'code', 'id');
    }
}
