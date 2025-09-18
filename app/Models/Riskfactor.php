<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riskfactor extends Model
{
    protected $table = "riskfactors";
    public $timestamps = true;
    protected $fillable = [
        'code',
        'tobacco_use',
        'second_hand_smoke',
        'alcohol_use',
        'physical_activity',
        'healtydiet',
        'occupational_exposure',
        'occupation_specify',
        'occupation_specify_others',
        'air_pollution',
        'family_history',
        'cancer_sites',
        'cancer_sites_other',
        'cancer_sites_other_value',
        'infections',
        'infections_others',
        'infections_other_content',
        'comorbidities',
        'comorbidities_others',
        'comorbidities_others_content',
        'has_cancer',
        'patient_diagnosed_w_cancer',
        'other_significant_medical_history',
        'sexual_orientation',
        'sexual_orientation_other',
        'sexual_partners',
        'age_first_intercourse',
        'contraceptives_use',
        'contraceptive_types',
        'contraceptive_types_other',
        'cancer_screening',
        'cancer_screening_other',
        'vaccine_hpv',
        'vaccine_hepb',
        'other_vaccines',
    ];
    protected $casts = [
        'healtydiet' => 'array',
        'occupation_specify' => 'array',
        'cancer_sites' => 'array',
        'infections' => 'array',
        'comorbidities' => 'array',
        'patient_diagnosed_w_cancer' => 'array',
        'cancer_screening' => 'array',
        'contraceptive_types' => 'array'
    ];

    public function demographicprofile()
    {
        return $this->belongsTo(Demographicprofile::class, 'code', 'id');
    }
}
