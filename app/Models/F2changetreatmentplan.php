<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2changetreatmentplan extends Model
{
     protected $fillable = [
        'code',
        // Surgery
        'surgery_plan','treatment_plan','surgery_reason',

        // Anti-Cancer Drug Therapy
        'anti_cancer_change','new_regimen','same_regimen','deferred_regimen',   
        'new_drug_type','same_drug_type','deferred_drug_type',
        'new_drug_regimen','same_drug_regimen','deferred_drug_regimen',
        'new_chemo_cycle','same_chemo_cycle','deferred_chemo_cycle',
        'new_drug_other','same_drug_other','deferred_drug_other',
        'new_next_cycle','same_next_cycle','deferred_next_cycle',
        'deferred_reason',

        // Radiotherapy
        'radio_change','radio_reason','radio_date_start','radio_date_end',
        'radio_total_dose','radio_dose_fraction','radio_total_fractions',
        'radio_type','radio_type_other',

        // Theranostics
        'thera_change','thera_reason','thera_type','thera_type_other',
        'thera_total_fractions','thera_dose_fraction',

        // Palliative Care
        'palliative','palliative_reason',

        // Other Cancer Directed Therapies
        'other_cancer','other_cancer_type','other_cancer_other','other_cancer_reason',

        // Remarks
        'remarks',
    ];

    protected $casts = [
        'new_drug_type' => 'array',
        'same_drug_type' => 'array',
        'deferred_drug_type' => 'array',
        'new_drug_regimen' => 'array',
        'same_drug_regimen' => 'array',
        'deferred_drug_regimen' => 'array',
        'new_chemo_cycle' => 'array',
        'same_chemo_cycle' => 'array',
        'deferred_chemo_cycle' => 'array',
        'radio_type' => 'array',
        'thera_type' => 'array',
        'other_cancer_type' => 'array',
    ];

    public function F2followup(){
        return $this->belongsTo(F2followup::class, 'code', 'id');
    }
}
