<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F3cancertreatmenthistory extends Model
{
    protected $table = "f3cancertreatmenthistories";
    
    protected $fillable = [
        // SURGERY
        'code',
        'first_surgery','first_surgery_date','first_surgery_code','first_surgery_desc','first_goal','first_adverse_event',
        'second_surgery','second_surgery_date','second_surgery_code','second_surgery_desc','second_goal','second_adverse_event',
        'third_surgery','third_surgery_date','third_surgery_code','third_surgery_desc','third_goal','third_adverse_event',
        'fourth_surgery','fourth_surgery_date','fourth_surgery_code','fourth_surgery_desc','fourth_goal','fourth_adverse_event',

        // DRUG
        'first_drug','first_purpose_administration','first_drug_type','first_drug_regimen','first_drug_response','first_drug_adverse',
        'second_drug','second_purpose_administration','second_drug_type','second_drug_regimen','second_drug_response','second_drug_adverse',
        'third_drug','third_purpose_administration','third_drug_type','third_drug_regimen','third_drug_response','third_drug_adverse',
        'fourth_drug','fourth_purpose_administration','fourth_drug_type','fourth_drug_regimen','fourth_drug_response','fourth_drug_adverse',
    ];

    protected $casts = [
        // surgery goals
        'first_goal' => 'array',
        'second_goal' => 'array',
        'third_goal' => 'array',
        'fourth_goal' => 'array',

        // drug types
        'first_drug_type' => 'array',
        'second_drug_type' => 'array',
        'third_drug_type' => 'array',
        'fourth_drug_type' => 'array'
    ];

    public function f3patientsurveillanceforms(){
        return $this->belongsTo(F3patientsurveillanceform::class, 'code', 'id');
    }
}
